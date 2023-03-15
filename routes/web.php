<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
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

// frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/posts', [FrontendController::class, 'posts']);
Route::get('/post/{posts:slug}', [FrontendController::class, 'detailPost']);

// controller
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::resource('/dashboard/posts', DashboardController::class);
Route::get('/dashboard/cekSlug', [DashboardController::class, 'Slug']);
