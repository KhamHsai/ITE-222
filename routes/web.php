<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello Laravel' ;
});

Route::get('/welcome', [PageController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'home']);