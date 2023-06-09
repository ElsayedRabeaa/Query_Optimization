<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('check_customer',[App\Http\Controllers\CustomerController::class,'check']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
