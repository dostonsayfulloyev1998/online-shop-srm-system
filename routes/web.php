<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;


//products
Route::get('/product',[ProductController::class,'index']);
Route::get('/create',[ProductController::class,'create'])->name('create.product');
Route::post('/store',[ProductController::class,'store'])->name('store.product');
Route::get('/delete/{id}',[ProductController::class,'destroy']);
Route::get('/edit/{id}',[ProductController::class,'edit']);
Route::post('/update-product',[ProductController::class,'update'])->name('update.product');

//category
Route::get('/category',[CategoryController::class,'index']);
Route::get('/create-category',[CategoryController::class,'create'])->name('create.category');
Route::post('/store-category',[CategoryController::class,'store'])->name('store.category');
Route::get('/delete-category/{id}',[CategoryController::class,'destroy']);
Route::get('/edit-category/{id}',[CategoryController::class,'edit']);
Route::post('/update-category',[CategoryController::class,'update'])->name('update.category');

//admin
Route::get('/admin',[AdminController::class,'index']);
Route::get('/create-admin',[AdminController::class,'create'])->name('create.admin');
Route::post('/store-admin',[AdminController::class,'store'])->name('store.admin');
Route::post('/update-admin',[AdminController::class,'update'])->name('update.admin');
Route::get('edit-admin/{id}',[AdminController::class,'edit']);
Route::get('delete-admin/{id}',[AdminController::class,'destroy']);

//users
Route::get('/users',[UsersController::class,'index']);
Route::get('/create-user',[UsersController::class,'create'])->name('create.user');
Route::post('/store-user',[UsersController::class,'store'])->name('store.user');
Route::post('/update-user',[UsersController::class,'update'])->name('update.user');
Route::get('edit-user/{id}',[UsersController::class,'edit']);
Route::get('delete-user/{id}',[UsersController::class,'destroy']);


//site
Route::view('/','index');
Route::view('/shop','shop');
Route::view('/cart','cart');
