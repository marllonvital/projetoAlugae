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

Route::post('login', 'API\PassportController@login');
Route::get('show-img', 'api\ProductController@showPhoto');
Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('logout', 'API\PassportController@logout');
    Route::get('get-details', 'API\PassportController@getDetails');
    Route::post('product-add', 'ProductController@store');

    Route::get('user/{id}', 'UserController@show');
    Route::put('user/reserveProduct/{product_id}', 'UserController@reserveProduct');
});

    // Admin Route
Route::group(['middleware' => 'admin'], function () {
    Route::get('product/listUsers/{id}', 'UserController@listUsers');
    Route::put('product/putInRent/{rent_id}', 'ProductController@putInProduct');
    Route::put('product/removeOfProduct/{product_id}', 'ProductController@removeOfProduct');

    Route::apiResource('product', 'ProductController');
    Route::apiResource('user', 'UserController');
    Route::apiResource('rent', 'RentController');
    Route::apiResource('category', 'CategoryController');
    Route::apiResource('bank_information', 'Bank_InformationController');
});
