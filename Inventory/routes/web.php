<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/dashboard', [DashboardController::class, 'dashboardPage']);
Route::get('/category', [CategoryController::class, 'CategoryPage']);
Route::get('/customerPage', [customerController::class, 'customer']);
Route::get('productPage', [ProductController::class, 'productPage']);
Route::get('invoicePage', [InvoiceController::class, 'invoicePage']);
Route::get('login', [UserController::class, 'loginPage']);
Route::get('reg', [UserController::class, 'regPage']);
Route::get('reset', [UserController::class, 'resetPage']);
Route::get('send', [UserController::class, 'sendPage']);
Route::get('verify', [UserController::class, 'verifyPage']);
Route::get('userProfile', [UserController::class, 'profilePage']);
Route::get('salePage', [UserController::class, 'salePage']);
Route::get('reportPage', [UserController::class, 'reportPage']);
