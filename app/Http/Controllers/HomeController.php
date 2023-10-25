<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {



        // One to One relationship
        // $users = User::all();
        
        // Inverse One to One relationship.
        // $addresses = Address::all();

        // One to Many relationship.
        // $categories = Category::find(1)->posts;

        
        // $posts = Post::with('tags')->get();
        // $post = Post::first();
        // $tag = Tag::first();
        // $post->tags()->attach($tag);

        // return view('home', compact('posts'));

        // Delete files from storage.
        // Storage::disk('public')->delete('images/Screenshot 2023-01-24 201013.png');
        // Storage::delete('images/Screenshot 2023-01-24 201013.png');

        // Delete file using file facade.
        // File::delete(storage_path('/app/public/images/screencapture-github-aadhar41-news-application-2023-03-22-21_04_13.png'));

        // Delete using helper function.
        // unlink(storage_path('/app/public/images/krishna.jpg'));

        return view('home');

        
        // DB::table('posts')->insert([
        //     'title' => 'This is a test data.',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est neque numquam quod, aperiam vero blanditiis consequatur facere odio nulla maiores quis praesentium ipsa, alias repudiandae illo explicabo corporis soluta impedit.',
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 1,
        // ]);

        // DB::table('posts')->where('id', 51)->update([
        //     'title' => 'This is a the updated data.',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'status' => 0,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 1,
        // ]);

        // DB::table('posts')->delete(52);

        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
        // ->select('posts.*')
        // ->get();
        /**
         * Aggregate Methods
         * min()
         * max()
         * avg()
         * count()
         * sum()
         */
        // return DB::table('posts')->sum('views');

        // Retrieve all data
        // return Post::all();

        // Retrieve Single Record.
        // $post = Post::findOrFail(80);
        // return $post->views;

        // $post = Post::where('views', '>', 300)->where('category_id', '=', 1)->get();
        // return $post;

        // $post = Post::orderByDesc('id')->first();
        // return $post;

        // Eloquent Insert Data.
        // $post = new Post();
        // $post->title = "W6sp9QOQu7vx6SMG3Xad";
        // $post->description = "CPCH1qP3nzt881SoqaF8yzVgJEylI4oTZ";
        // $post->status = 1;
        // $post->publish_date = date("Y-m-d");
        // $post->user_id = 1;
        // $post->category_id = 1;
        // $post->views = 125;
        // $post->save();
        // return response()->json([
        //     "message" => "Post created successfully.",
        //     "data" => $post,
        // ], 201);

        // $post = Post::find(50);
        // $post->title = "This is the updated title.";
        // $post->save();
        // return response()->json([
        //     "message" => "Post updated successfully.",
        //     "data" => $post,
        // ], 201);

        // $post = Post::findOrFail(51)->delete();
        // return response()->json([
        //     "message" => "Post deleted successfully.",
        //     "data" => $post,
        // ], 201);
        
        // Mass Assignment Insert
        // $post = Post::create([
        //     'title' => "Test mass assignment title.",
        //     'description' => "Test mass assignment description.",
        //     'status' => 1,
        //     'publish_date' => date("Y-m-d"),
        //     'user_id' => 1,
        //     'category_id' => 3,
        //     'views' => 125,
        // ]);

        // return response()->json([
        //     "message" => "Post created successfully.",
        //     "data" => $post,
        // ], 201);
        
        // Update Mass Assignment
        // $post = Post::find(54)->update([
        //     'title' => "Updated mass assignment title.",
        //     'description' => "Updated mass assignment description.",
        //     'status' => 1,
        //     'publish_date' => date("Y-m-d"),
        //     'user_id' => 2,
        //     'category_id' => 5,
        //     'views' => 470,
        // ]);
        
        // $post = Post::where('category_id', 5)->update([
        //     'title' => "Updated mass assignment title for Entertainment.",
        //     'description' => "Updated mass assignment description for Entertainment.",
        //     'status' => 1,
        //     'publish_date' => date("Y-m-d"),
        //     'user_id' => 2,
        //     'category_id' => 5,
        //     'views' => rand(100, 500),
        // ]);

        // return response()->json([
        //     "message" => "Post updated successfully.",
        //     "data" => $post,
        // ], 201);

        // Soft Deleting Data.
        // $post = Post::findOrFail(50)->delete();

        // return response()->json([
        //     "message" => "Post deleted successfully.",
        //     "data" => $post,
        // ], 201);
        
        // Retrieve Soft Deleting Data.
        // $post = Post::onlyTrashed()->get();

        // return response()->json([
        //     "message" => "Post trashed data.",
        //     "data" => $post,
        // ], 201);

        // Restored trashed posts.
        // $post = Post::withTrashed()->get();
        // return response()->json([
        //     "message" => "Post with trashed data.",
        //     "data" => $post,
        // ], 201);
        
        // Restored trashed posts.
        // $post = Post::withTrashed()->find(49)->restore();
        // return response()->json([
        //     "message" => "Trashed Post restored.",
        //     "data" => $post,
        // ], 201);

        // Permanently Delete record.
        // $post = Post::withTrashed()->find(50)->forceDelete();
        // return response()->json([
        //     "message" => "Post permanently delete.",
        //     "data" => $post,
        // ], 201);

        // return view('home', compact('projects'));
    }
}
