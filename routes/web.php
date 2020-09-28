<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('products')->group(function (){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/create',[\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [\App\Http\Controllers\ProductController::class,'store'])->name('products.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::post('/{id}/edit', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::get('/{id}/destroy',[\App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy');
});
