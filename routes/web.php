<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

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



Route::get('get-session', function(Request $request) {
    // $data = session()->all();
    $data = $request->session()->all();
    // $data = $request->session()->get('_token');
    dd($data);
});


Route::get('save-session', function(Request $request) {
    $request->session()->put(['user_status' => 'logged_in']);
    session(['user_ip' => '192.168.1.1','user_id' => '121']);
    return redirect('get-session');
});

Route::get('destroy-session', function(Request $request) {
    // $request->session()->forget(['user_id','user_status','user_ip']);
    // session()->forget(['user_id','user_status','user_ip']);
    // $request->session()->flush();
    // session()->flush();
    return redirect('get-session');
});

Route::get('flash-session', function(Request $request) {
    $request->session()->flash('status', 'true');
    // session()->flush();
    return redirect('get-session');
});


