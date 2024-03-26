<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController as ProductController;

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

Route::prefix('products')->group(function () {

    Route::get('index', [ProductController::class, 'index'])->name('products.index');

    Route::get('create', function () {
        return view('products.create');
    })->name('products.create');

    Route::post('store', [ProductController::class, 'store'])->name('products.store');

});

Route::prefix('movements')->group(function () {

    Route::get('create', function () {
        return view('movements.create');
    })->name('movements.create');

    Route::get('index', function () {
        return view('movements.index');
    })->name('movements.index');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
