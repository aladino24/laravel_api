<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'createProduct']);
Route::post('/product', [ProductController::class, 'storeProduct']);
Route::get('/product/{id}/edit', [ProductController::class, 'editProduct']);
Route::put('/product/{id}', [ProductController::class, 'updateProduct']);
Route::delete('/product/{id}', [ProductController::class, 'destroyProduct']);
