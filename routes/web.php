<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\callback;

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

Route::get('/home', HomeController::class)->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('AuthCheckMiddleware2');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

// Route::group(["middleware" => "AuthCheckMiddleware"], function() {
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
    Route::get('/posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::delete('/posts/{post}/force-delete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');
    Route::resource('posts', PostController::class);
// });


Route::get('send-mail', function() {
    // Mail::raw('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna eget dolor semper posuere. Sed at purus nec nulla ullamcorper mattis.', function($message) {
    //     $message->to('aadhar41@gmail.com')->subject('Testing E-Mail');
    // });

    
    $post = App\Models\Post::find(1);
    // return new App\Mail\OrderShipped($subject = 'Testing HTML', $title = "Hi E-Mail", $content = "Lorem ipsum", $buttonText = 'Click Here', $buttonUrl = '#', $email = 'rs12732@gmail.com', $post);
    // return new App\Mail\OrderShipped($post);
    Mail::send(new App\Mail\OrderShipped($post));
    // return Mail::send(new OrderShipped($post));


    dd('Success!! Mail Sent.');
});


