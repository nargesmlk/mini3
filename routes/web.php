<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\CategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->namespace('AdminPanel')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

    Route::prefix('category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('admin.category');
        Route::get('create',[CategoryController::class,'create'])->name('admin.category.create');
    });
});