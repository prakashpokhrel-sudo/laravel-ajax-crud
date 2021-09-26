<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;


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

Route::post("register",[UserController::class, "register"]);
Route::post("login",[UserController::class, "login"]);

Route::group(["middleware"=>["api"]], function(){
    //user api
Route::get("profile", [UserController::class, "profile"]);
    // Api route
Route::get("total-orders",[OrderController::class, "totalOrders"]); 
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
