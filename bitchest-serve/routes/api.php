<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

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

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class,'register']);
    Route::post('login', [AuthController::class,'login']);
    Route::get('refresh', [AuthController::class,'refresh']);
});
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user', [AuthController::class,'user']);
    Route::post('logout', [AuthController::class,'logout']);

    // Members
    Route::get('members', [UserController::class, 'index'])->middleware('isAdmin');
    Route::get('member/{id}', [UserController::class, 'show'])->middleware('isMember');
});