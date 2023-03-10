<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
