<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::fallback(function () {
    return view('404');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
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
})->name('home');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
