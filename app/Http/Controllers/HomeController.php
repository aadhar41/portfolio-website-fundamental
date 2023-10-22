<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
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

        dd('Success');
        // return view('home', compact('projects'));
    }
}
