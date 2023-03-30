<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers\PostController;
use App\Http\Controllers\ApiControllers\UserController;

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
Route::prefix('V1')->group(function () {
   // data post
   Route::middleware('auth:api')->get('/mydata', [PostController::class, 'index']);
   Route::middleware('auth:api')->get('/mydata/{id}', [PostController::class, 'show']);
   Route::middleware('auth:api')->post('/mydata', [PostController::class, 'store']);
   Route::middleware('auth:api')->put('/mydata/{id}', [PostController::class, 'update']);
   Route::middleware('auth:api')->delete('/mydata/{id}', [PostController::class, 'destroy']);

   //authentication
   Route::post('/login', [UserController::class, 'login']);
   Route::post('/register', [UserController::class, 'register']);
   Route::middleware('auth:api')->post('/logout', [UserController::class, 'logout']);
});
