<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\PostController;
use App\Http\Controllers\AdminControllers\DashboardController;

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
Route::get('/post/{post:slug}', [FrontendController::class, 'detailPost']);
Route::post('/post/{posts:id}/comment', [FrontendController::class, 'StoreComment']);
Route::delete('/post/{post:slug}/comment/{comment:id}', [FrontendController::class, 'DestroyComment'])->middleware('admin');

// backend
Route::prefix('/dashboard')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->middleware('auth');
    Route::resource('/posts', PostController::class)->middleware('auth');
    Route::get('/cekSlug', [PostController::class, 'Slug']);
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
