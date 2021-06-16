<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class, 'index']);

// category managment

Route::group(['prefix'=> 'category'], function(){
	Route::get('/', [CategoryController::class, 'index'])->name('category.index');
	Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
	Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
	Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
	Route::post('/update/{id}',[CategoryController::class, 'update'])->name('category.update');
	Route::get('/delete/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
});



// Products managment

Route::group(['prefix'=> 'product'], function(){
	Route::get('/', [ProductsController::class, 'index'])->name('product');
	Route::get('/create', [ProductsController::class, 'create'])->name('product.create');
	Route::post('/create', [ProductsController::class, 'store'])->name('product.store');
	Route::get('/edit/{id}',[ProductsController::class, 'edit'])->name('product.edit');
	Route::post('/update/{id}',[ProductsController::class, 'update'])->name('product.update');
	Route::get('/delete/{id}',[ProductsController::class, 'destroy'])->name('product.destroy');
});
