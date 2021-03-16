<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PegawaiController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact-us', [ContactController::class, 'index']);

Route::get('/customer', [CustomerController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
