<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::middleware('guest')->group(function () {
	Route::get('/products', [ProductController::class, 'index']);
	Route::get('/users', [UserController::class, 'index']);
	Route::get('/categories', [CategoryController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});
