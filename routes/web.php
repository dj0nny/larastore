<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/products/create', [ShopController::class, 'create'])->middleware('auth')->name('createProduct');
Route::post('/products/store', [ShopController::class, 'store'])->middleware('auth')->name('storeProduct');
Route::delete('/products/{product}/delete', [ShopController::class, 'destroy'])->middleware('auth')->name('delete');
Route::get('/products/{product}/edit', [ShopController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('/products/{product}/update', [ShopController::class, 'update'])->middleware('auth')->name('update');

Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categoriesList');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->middleware('auth')->name('showCategoryProducts');

Route::get('/register', [UserController::class, 'create']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth/register', [UserController::class, 'store']);
Route::post('/auth/login', [UserController::class, 'authenticate']);
Route::post('/auth/logout', [UserController::class, 'logout']);