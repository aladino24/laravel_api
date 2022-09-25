<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/product', [ProductApiController::class, 'index']);
Route::post('/product', [ProductApiController::class, 'storeProduct']);
Route::get('/product/{id}', [ProductApiController::class, 'showProduct']);
Route::put('/product/{id}', [ProductApiController::class, 'updateProduct']);
Route::delete('/product/{id}', [ProductApiController::class, 'destroyProduct']);
