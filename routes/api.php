<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("sale_executive/login",[AuthController::class,"login"]);
Route::post("sale_executive/generateOtp",[AuthController::class,"generateOtp"]);
Route::post("sale_executive/verifyForgotPassOtp",[AuthController::class,"verifyForgotPassOtp"]);
Route::post("sale_executive/changePassword",[AuthController::class,"changePassword"]);
Route::post("sale_executive/updateProfileImage",[AuthController::class,"updateProfileImage"]);
