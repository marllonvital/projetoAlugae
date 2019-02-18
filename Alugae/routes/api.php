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
Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('logout', 'API\PassportController@logout');
    Route::post('get-details', 'API\PassportController@getDetails');
    Route::post('product-add', 'ProductController@store');

    Route::get('user/getProduct', 'UserController@getProduct');
    Route::put('user/reserveProduct/{product_id}', 'UserController@reserveProduct');
});

    // Admin Route
Route::group(['middleware' => 'admin'], function () {
    Route::get('product/listUsers/{id}', 'UserController@listUsers');
    Route::put('product/putInRent/{rent_id}', 'ProductController@putInProduct');
    Route::put('product/removeOfProduct/{product_id}', 'ProductController@removeOfProduct');

    Route::resources([
      'users' => 'UserController',
      'rents' => 'RentController',
      'products' => 'ProductController',
      'categories' => 'CategoryController',
      'bank_informations' => 'Bank_InformationController',
    ]);
});
