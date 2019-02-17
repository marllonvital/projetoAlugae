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
  Route::get('get-details', 'API\PassportController@getDetails');
  Route::apiResource('rents', 'RentController');
  Route::apiResource('bank_informations', 'Bank_InformationController');
});
// //rotas que só podem ser acessadas com um user logado
// Route::group(['middleware' => 'auth:api'], function() {

//     //User Authenticated Routes
//     //User Auth Routes
//     Route::get('logout', 'Api\PassportController@logout');

//     //User - Room ROUTES
//     Route::get('user/getRoom', 'UserController@getRoom');
//     Route::put('user/reserveRoom/{room_id}', 'UserController@reserveRoom');
//     Route::put('user/removeRoom', 'UserController@removeRoom');

//     //User - Lecture ROUTES
//     Route::get('user/getLectures', 'UserController@getLectures');
//     Route::put('user/subInLecture/{lecture_id}', 'UserController@subInLecture');
//     Route::put('user/unsubInLecture/{lecture_id}', 'UserController@unsubInLecture');

// // Admin Routes
//     Route::group(['middleware' => 'admin'], function () {
//       Route::apiResource('hotels', 'HotelController');

//       Route::apiResource('rooms', 'RoomController');
//       Route::get('room/listUsers/{id}', 'UserController@listUsers');
//       Route::put('room/putInRoom/{room_id}', 'RoomController@putInRoom');
//       Route::put('room/removeOfRoom/{room_id}', 'RoomController@removeOfRoom');

//       Route::apiResource('lectures', 'LectureController');
//       Route::get('lecture/listUsers/{id}', 'LectureController@listUsers');
//       Route::put('lecture/subInLecture/{lecture_id}', 'LectureController@subInLecture');
//       Route::put('lecture/unsubInLecture/{lecture_id}', 'LectureController@unsubInLecture');
//       });
// });
