<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    
    /**
     * The function is a constructor that initializes a variable with an optional parameter.
     * 
     * @param Type var The parameter "var" is of type "Type" and is optional. It can be passed as an
     * argument when creating an instance of the class, but if no argument is provided, it will default
     * to null.
     */
    public function __construct() {
        // $this->middleware('AuthCheckMiddleware')->only(['create','store','update','destroy','restore','forceDelete']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Cache::remember('posts-page-' . request()->get('page', 1), 60, function() {
            return Post::with('category')->paginate(5);
        });
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gate Method for authorize.
        // $this->authorize('create-post');

        // Policy Method for authorize.
        $this->authorize('create', Post::class);
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gate Method for authorize.
        // $this->authorize('create-post');

        // Policy Method for authorize.
        $this->authorize('create', Post::class);
        $request->validate([
            'image' => ['required','max:1000','min:50','image'],
            'title' => ['required','max:255'],
            'category_id' => ['required','max:255'],
            'description' => ['required','max:500'],
        ]);

        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = 'storage/' . $filePath;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        // Gate Method for authorize.
        // $this->authorize('edit-post');

        // Policy Method for authorize.
        $this->authorize('update', Post::class);

        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Gate Method for authorize.
        // $this->authorize('edit-post');

        // Policy Method for authorize.
        $this->authorize('update', Post::class);

        $request->validate([
            'title' => ['required','max:255'],
            'category_id' => ['required','max:255'],
            'description' => ['required','max:500'],
        ]);
        
        $post = Post::findOrFail($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['required','max:1000','min:50','image'],
            ]);
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);
            File::delete(public_path($post->image));
            $post->image = 'storage/' . $filePath;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Gate Method for authorize.
        // $this->authorize('delete-post');

        // Policy Method for authorize.
        $post = Post::findOrFail($id);
        $this->authorize('delete', $post);

        $post->delete();
        return redirect()->route('posts.index');
    }

    
    /**
     * The function "trashed" is a PHP function that takes a Request object as a parameter.
     * 
     * @param Request request The  parameter is an instance of the Request class, which
     * represents an HTTP request made to the server. It contains information about the request, such
     * as the request method, headers, and request data.
     */
    public function trashed(Request $request) {
        // Gate Method for authorize.
        // $this->authorize('delete-post');

        // Policy Method for authorize.
        $posts = Post::onlyTrashed()->get();
        $this->authorize('delete', $posts);

        return view('posts.trashed', compact('posts'));
    }


    /**
     * The restore function restores a trashed post and redirects to the trashed posts page.
     * 
     * @param Request request The  parameter is an instance of the Request class, which
     * represents an HTTP request made to the server. It contains information about the request such as
     * the request method, headers, and input data.
     * @param id The "id" parameter is the identifier of the specific post that needs to be restored.
     * It is used to find the trashed post using the "findOrFail" method.
     * 
     * @return a redirect to the 'posts.trashed' route.
     */
    public function restore(Request $request, $id) {
        // Gate Method for authorize.
        // $this->authorize('delete-post');

        // Policy Method for authorize.
        $post = Post::onlyTrashed()->findOrFail($id);
        $this->authorize('delete', $post);
        
        $post->restore();
        return redirect()->route('posts.trashed');
    }


    /**
     * The function forceDelete restores a trashed post and redirects to the trashed posts page.
     * 
     * @param Request request The  parameter is an instance of the Request class, which
     * represents an HTTP request made to the server. It contains information about the request such as
     * the request method, headers, and input data.
     * @param id The  parameter is the identifier of the post that needs to be force deleted. It is
     * used to find the post in the database using the `findOrFail()` method.
     * 
     * @return a redirect to the 'posts.trashed' route.
     */
    public function forceDelete(Request $request, $id) {
        // Gate Method for authorize.
        // $this->authorize('delete-post');

        // Policy Method for authorize.
        $post = Post::onlyTrashed()->findOrFail($id);
        $this->authorize('delete', $post);

        File::delete(public_path($post->image));
        $post->forceDelete();
        return redirect()->back();
    }

}
