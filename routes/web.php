<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\Frontend\FrontendController;

//Frontend
Route::get('/',[FrontendController::class,'mainview']);


//category route


Route::get('/dashboard',[CategoryController::class,'dashboard'])->name('dashboard');


Route::get('/list-category',[CategoryController::class,'listCategory'])->name('list.category');
Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update-category');
Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete.category');

Route::post('/store-category',[CategoryController::class,'storeCategory'])->name('store.category');

//product route

Route::get('/list-product',[ProductController::class,'listProduct'])->name('list.product');
Route::get('/add-product',[ProductController::class,'addProduct'])->name('add.product');
Route::post('/store-product',[ProductController::class,'storeProduct'])->name('store.product');
Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
Route::post('/update-product/{id}',[ProductController::class,'updateProduct'])->name('update.product');
Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete.product');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('front.home.home');
    })->name('dashboard');
});
