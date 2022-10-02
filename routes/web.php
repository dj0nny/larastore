<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ShopController::class, 'index']);
Route::delete('/products/{product}/delete', [ShopController::class, 'destroy'])->middleware('auth');

Route::get('/register', [UserController::class, 'create']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth/register', [UserController::class, 'store']);
Route::post('/auth/login', [UserController::class, 'authenticate']);
Route::post('/auth/logout', [UserController::class, 'logout']);