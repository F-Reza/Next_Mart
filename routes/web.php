<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/main', function () {
    return ('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'userLogin'])->name('login');
Route::post('/register', [AuthController::class, 'userStore'])->name('register');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'details'])->name('category');
Route::get('/category/subcategory/{slug}', [SubCategoryController::class, 'details'])->name('sub-category');

Route::get('/category/category1/subcategory1/product1/{slug}', [ProductDetailsController::class, 'details'])->name('product-details');
Route::get('/category/category1/product1/{slug}', [ProductDetailsController::class, 'details'])->name('product-details');
Route::get('/product/product1/{slug}', [ProductDetailsController::class, 'details'])->name('product-details');

Route::get('/cart-list/{slug}', [CartController::class, 'cartList'])->name('cart-list');
Route::get('/checkout/{slug}', [CheckoutController::class, 'checkout'])->name('checkout');
