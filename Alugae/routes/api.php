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
Route::apiResource('categories', 'CategoryController');

Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');
Route::group(['middleware' => 'auth:api'], function() {
  Route::get('logout', 'API\PassportController@logout');
  Route::post('get-details', 'API\PassportController@getDetails');
  Route::apiResource('rents', 'RentController');
  Route::apiResource('bank_informations', 'Bank_InformationController');
});

//rotas que só podem ser acessadas com um user logado
Route::group(['middleware' => 'auth:api'], function() {

    //User Authenticated Routes
    //User Auth Routes
    Route::get('logout', 'Api\PassportController@logout');

    //User - Product ROUTES
    Route::get('user/getProdutc', 'UserController@getProdutc');
    Route::put('user/reserveProduct/{product_id}', 'UserController@reserveProduct');
    Route::put('user/removeProduct', 'UserController@removeProduct');

    // Admin Route
        Route::group(['middleware' => 'admin'], function () {
          

          Route::apiResource('product', 'ProductController');
          Route::get('prouct/listUsers/{id}', 'UserController@listUsers');
          Route::put('product/putInRent/{rent_id}', 'ProductController@putInProduct');
          Route::put('product/removeOfProduct/{product_id}', 'ProductController@removeOfProduct');

          });
    });
