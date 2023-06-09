<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();

});
Route::group([
    'middleware' =>  ['auth:sanctum'],

],function(){

Route::get('/products', [ProductController::class, 'index']);


});
Route::post('/user/register', [UserController::class, 'store']);
Route::post('/user/login', [AuthController::class, 'login']);

