<?php

use App\Events\UserRegistered;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Jobs\SendMail;
use App\Mail\OrderShipped;
use App\Mail\PostPublished;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use function PHPUnit\Framework\callback;
use App\DataTables\UsersDataTable;
use App\Helpers\ImageFilter;
use App\Http\Controllers\CartController;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (UsersDataTable $dataTable) {
    return $dataTable->render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/home', HomeController::class)->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('AuthCheckMiddleware2');

Route::group(["middleware" => "auth"], function() {
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
    Route::get('/posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::delete('/posts/{post}/force-delete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');
    Route::resource('posts', PostController::class);

    Route::post('/upload-file', [ImageController::class, 'handleImage'])->name('upload-file');
    Route::get('/download', [ImageController::class, 'download'])->name('download');
});

Route::get('user-data', function() {
    // return Auth::user();
    // return auth()->user()->email;
    return auth()->user();
});

Route::get('send-mail', function() {
    // $post = Post::findOrFail(9);

    SendMail::dispatch();

    // For Checking E-mails in Browser.
    // $post = Post::findOrFail(9);
    // return new App\Mail\PostPublished($post);

    dd('Success! E-mail dispatched.');
    
});

Route::get('user-register', function() {
    $user = User::findOrFail(11);
    event(new UserRegistered($user));
    dd('Welcome email Send.');
});

// en, hi
Route::get('greeting/{locale}', function($locale) {
    App::setLocale($locale);
    return view('greeting');
})->name('greeting');

// en, hi
Route::get('image', function() {
    // Image::configure(['driver' => 'imagick']);
    $img = Image::make('pexels-cesar-perez-733745.jpg');
    $img->filter(new ImageFilter(400, 50));
    $img->save('pexels-cesar-perez-733745-2-filter.jpg', 80);
})->name('image');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('add-to-cart');

Route::get('/qty-increase/{rowId}', [CartController::class, 'qtyIncrease'])->name('qty-increase');

Route::get('/qty-decrease/{rowId}', [CartController::class, 'qtyDecrease'])->name('qty-decrease');

Route::get('/remove-item/{rowId}', [CartController::class, 'removeItem'])->name('remove-item');

Route::get('/wishlist-item/{rowId}', [CartController::class, 'wishlistItem'])->name('wishlist-item');

Route::get('/add-to-wishlist/{productId}', [CartController::class, 'addToWishlist'])->name('add-to-wishlist');

Route::get('/create-role', function() {
    // $role = Role::create(['name' => 'admin']);
    // return "Role Created";

    // $user = auth()->user();
    // $user->assignRole('publisher');
    // $user->givePermissionTo('edit articles');
    
    // return $user->can('edit articles');

    // return $user;
})->name('create-role');

Route::get('/create-permission', function() {
    $permission = Permission::create(['name' => 'edit articles']);
    return "Permission Created";
})->name('create-permission');


Route::get('all-posts', function() {
    $posts = Post::paginate(10);
    return view('posts.posts', compact('posts'));
})->name('all-posts');
