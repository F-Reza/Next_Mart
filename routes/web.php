<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

Route::get('/main', function () {
    return ('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'details'])->name('category');
Route::get('/category/subcategory/{slug}', [SubCategoryController::class, 'details'])->name('sub-category');
