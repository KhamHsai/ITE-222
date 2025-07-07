<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello Laravel' ;
});

Route::get('/welcome', [PageController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'home']);


Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/index', [BlogController::class, 'index'])->name('blogs.index');