<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Auth;
use App\User;
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
    $price = DB::table('price')->get();
    return view('welcome', compact('price'),['title'=>'Киберкотлета']);
});

Route::get('/rules', function () {
    return view('rules',['title'=>'Правила']);
});


Route::get('/games', function () {
    return view('games',['title'=>'Игры']);
});





Route::middleware(['guest'])->group(function () {

    Route::get('/form', [FormController::class, 'create']);
    Route::post('/', [FormController::class, 'store']);

    Route::get('register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [RegisterController::class, 'loginform'])->name('register.loginform');
    Route::post('login', [RegisterController::class, 'login'])->name('register.login');

});


    Route::get('/logout', [RegisterController::class, 'logout'])->name('register.logout');
    Route::get('/form', [FormController::class, 'create']);
    Route::post('/', [FormController::class, 'store']);






Route::middleware(['admin'])->group(function () {

    Route::delete('/test/{orders}', [PanelController::class, 'destroy'])->name('admin.destroy');
    Route::get('/adminpanel', [PanelController::class, 'index'])->name('admin.orders');
    Route::get('/store/order', [PanelController::class, 'storeOrder'])->name('admin.store.order');
    Route::post('/success', [PanelController::class, 'store'])->name('admin.store.orders');

    Route::get('/adminpanel/price', [AdminController::class, 'index'])->name('admin.price');
    Route::get('/adminpanel/price/{id}', [AdminController::class, 'UpdatePrice'])->name('admin.edit');
    Route::post('/adminpanel/price/{id}', [AdminController::class, 'edit'])->name('admin.edit.submit');
    Route::get('/store/price', [AdminController::class, 'storePrice'])->name('admin.store.price');
    Route::post('/success/price', [AdminController::class, 'store'])->name('admin.store.price');
    Route::delete('/delete/{price}', [AdminController::class, 'destroy'])->name('admin.destroy.price');

});

