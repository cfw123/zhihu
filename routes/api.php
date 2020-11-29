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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


//Route::get('users',function(){
//    return response()->json(['data'=>['id'=>1,'name'=>'张三'],'code'=>200]);
//})->middleware('auth:api');



Route::get('users',function(){
    return response()->json(['data'=>['id'=>1,'name'=>'张三'],'code'=>200]);
})->middleware('auth:api');



Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});