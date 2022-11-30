<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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


Route::get('/categories/', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category_id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{category_id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/products/', [ProductController::class, 'index'])->name('products');
Route::get('/category/{category_id}/products', [ProductController::class, 'Category_progucts'])->name('category.products');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{product_id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/update/{product_id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{product_id}', [ProductController::class, 'delete'])->name('product.delete');


