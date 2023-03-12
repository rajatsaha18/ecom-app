<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/category', [HomeController::class,'category'])->name('category');
Route::get('/detail', [HomeController::class,'detail'])->name('detail');
Route::get('/my-cart', [HomeController::class,'myCart'])->name('my-cart');
Route::get('/account', [HomeController::class,'account'])->name('account');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class,'create'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [CategoryController::class,'edit'])->name('edit-category');
    Route::post('/update-category/{id}', [CategoryController::class,'update'])->name('update-category');
    Route::get('/delete-category/{id}', [CategoryController::class,'delete'])->name('delete-category');

    Route::get('/add-product', [ProductController::class,'addProduct'])->name('add-product');
    Route::post('/new-product', [ProductController::class,'create'])->name('new-product');
    Route::get('/manage-product', [ProductController::class,'manageProduct'])->name('manage-product');
});
