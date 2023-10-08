<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $projects = [
            [
                'name' => 'Project 1',
                'image' => 'https://placehold.co/600x400/png',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias totam nobis, veniam in aliquid minus at natus amet possimus dignissimos ea expedita eos quasi ratione magni minima illum quia quos..',
                'status' => 1,
            ],
            [
                'name' => 'Project 2',
                'image' => 'https://placehold.co/600x400/png',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque at quae minima, impedit, perferendis doloremque ipsa aperiam sint eligendi reprehenderit, beatae odio! Quia deleniti sapiente dolore illo aliquid harum ea.',
                'status' => 0,
            ],
            [
                'name' => 'Project 3',
                'image' => 'https://placehold.co/600x400/png',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic, numquam nihil dicta totam reprehenderit recusandae praesentium voluptatibus, dolorum voluptatem omnis asperiores, quisquam amet ipsam non cupiditate. Architecto, sunt eveniet?',
                'status' => 1,
            ],
            [
                'name' => 'Project 4',
                'image' => 'https://placehold.co/600x400/png',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic, numquam nihil dicta totam reprehenderit recusandae praesentium voluptatibus, dolorum voluptatem omnis asperiores, quisquam amet ipsam non cupiditate. Architecto, sunt eveniet?',
                'status' => 1,
            ],
        ];
        return view('home', compact('projects'));
    }
}
