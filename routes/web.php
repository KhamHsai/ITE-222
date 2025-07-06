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
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/blog', [BlogController::class, 'store'])->name('store');
Route::get('/index', [BlogController::class, 'index'])->name('index');