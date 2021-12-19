<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ApiController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\ProductAPIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Category/list',[ApiController::class,'APICateList'])->middleware('APIAuth');
Route::post('/Category/submit',[ApiController::class,'APICatePost']);
Route::post('/login',[LoginAPIController::class,'login']);
Route::post('/logout',[LoginAPIController::class,'logout']);
Route::post('/register',[UserAPIController::class,'register']);
Route::post('/profile',[LoginAPIController::class,'Profile'])->middleware('APIAuth');

//product
Route::post('/addproduct',[ProductAPIController::class,'add'])->middleware('APIAuth');
Route::get('/allproducts',[ProductAPIController::class,'APIProList'])->middleware('APIAuth');
Route::get('/editproduct/{id}',[ProductAPIController::class,'edit'])->middleware('APIAuth');
Route::post('/updateproduct/{id}',[ProductAPIController::class,'update'])->middleware('APIAuth');
Route::delete('/deleteproduct/{id}',[ProductAPIController::class,'delete']);
Route::get('/allorders',[ProductAPIController::class,'order'])->middleware('APIAuth');