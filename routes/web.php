<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\destinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
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


Route::get('/test', function () {
    return view('testhtml');
});

Route::get('/category/{id}', function () {
    return view('product-masonry');
});

Route::get('/form', function () {
    return view('test');
});
//////////////////////////////////////////
Route::get('/home', function () {
    return view('contents.index-3');
});

Route::get('/product', function () {
    return view('product-4cols');
});
Route::get('/single', function () {
    return view('product');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/in', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/admin', function () {
    return view('admin.products.index');
});
Route::get('/check', function () {
    return view('checkout');
});


// Route::get('/product/{id}', function () {
//     return view('product');
// });

Route::resource('category', CategoryController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('order', OrderController::class);
Route::resource('orderItem', OrderItemController::class);
Route::resource('payment', PaymentController::class);
Route::resource('product', ProductController::class);
Route::resource('home', HomeController::class);
Route::resource('destination', destinationController::class);


Route::resource('admin', AdminController::class);

//////////////////////////////  Admin
Route::get('/category', function () {
    return view('admin.categories.index');
});
Route::get('/products', function () {
    return view('admin.products.index');
});
Route::get('/products.update', function () {
    return view('admin.products.update');
});




//////////////////////////////////////////////
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

