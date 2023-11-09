<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[App\Http\Controllers\indexController::class,'index'])->name('index');
Route::get('/shop',[App\Http\Controllers\shopController::class,'shop'])->name('shop');
Route::get('/about',[App\Http\Controllers\aboutController::class,'about'])->name('about');
Route::get('/service',[App\Http\Controllers\serviceController::class,'service'])->name('service');
Route::get('/blog',[App\Http\Controllers\blogController::class,'blog'])->name('blog');
Route::get('/contack',[App\Http\Controllers\contackController::class,'contack'])->name('contack');
Route::get('/cart',[App\Http\Controllers\cartController::class,'cart'])->name('cart');