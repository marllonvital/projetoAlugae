<?php

use Illuminate\Http\Request;

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

Route::apiResource('users', 'UserController');
Route::apiResource('products', 'ProductController');
Route::apiResource('rents', 'RentController');
Route::apiResource('categories', 'CategoryController');
Route::apiResource('bank_informations', 'Bank_InformationController');
