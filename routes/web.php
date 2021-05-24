<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddlewareController;

Route::get('/', [MiddlewareController::class,'index'])->name('main_page');
Route::get('/about', [MiddlewareController::class,'about'])->name('about_page')->middleware('custom_middleware');
Route::get('/category', [MiddlewareController::class,'category'])->name('category_page');
Route::get('/blog', [MiddlewareController::class,'blog'])->name('blog_page');
Route::get('/contact', [MiddlewareController::class,'contact'])->name('contact_page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
