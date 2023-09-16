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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;
// use App\Http\Controllers\ServiceController;
// Route::resource('/ui-ux-design', ServiceController::class);

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/home', [PageController::class, 'index']);
Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
Route::get('/subcategory/{sub}', [PageController::class, 'subcategory'])->name('subcategory');
Route::get('/category/{sub}', [PageController::class, 'category'])->name('category');
Route::get('/about', [PageController::class, 'about'])->name('about');
//Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::get('/delivery', [PageController::class, 'delivery'])->name('delivery');
Route::get('/product/{id_product}', [PageController::class, 'product'])->name('product');

Route::post('/contacts', [PageController::class, 'contactStore'])->name('send-contact');

Route::get('/cart', [PageController::class, 'cart'])->name('cart');
//Route::get('/to_cart/{id_product}', [PageController::class, 'to_cart'])->name('to_cart');
Route::get('/cart/{id_product}', [PageController::class, 'to_cart'])->name('to_cart');
Route::post('/delete_product/{id_product}', [PageController::class, 'delete_product'])->name('delete_product');
Route::post('/cart/minus/{id_product}', [PageController::class, 'minus'])->name('minus');
Route::post('/cart/plus/{id_product}', [PageController::class, 'plus'])->name('plus');

Route::get('/processing', [PageController::class, 'processing'])->name('processing');
Route::post('/processing/store', [PageController::class, 'order_store'])->name('order_store');

/* Route::match(['get', 'post'], '/contact', [PageController::class, 'contact'])->name('contact'); */

Route::fallback(function() {
    return "<h1>ты не туда попал, пока..........................</h1> <p> <a href = ".route('home').">тебе сюда</a></p>";
});

Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/admin-home', [PageController::class, 'admin_home'])->name('admin-home');
Route::get('/admin-home/subcategory/{sub}', [PageController::class, 'admin_subcategory'])->name('admin-subcategory');
Route::get('/admin-home/category/{sub}', [PageController::class, 'admin_category'])->name('admin-category');
Route::get('/admin-create', [PageController::class, 'admin_create'])->name('admin-create');
Route::get('/admin-messages', [PageController::class, 'admin_messages'])->name('admin-messages');
Route::get('/admin-orders', [PageController::class, 'admin_orders'])->name('admin-orders');
Route::get('/admin-order/{order}', [PageController::class, 'admin_order'])->name('admin-order');
Route::get('/admin-update/{product}', [PageController::class, 'admin_update'])->name('admin-update');

Route::post('/admin-create', [PageController::class, 'create'])->name('create');
Route::post('/admin-update/{id}', [PageController::class, 'update'])->name('update');
Route::post('/admin-delete/{product}', [PageController::class, 'delete'])->name('delete');
Route::post('/admin-order/{id_order}', [PageController::class, 'status'])->name('status');
