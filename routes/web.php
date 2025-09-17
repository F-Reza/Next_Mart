<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/main', function () {
    return ('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
