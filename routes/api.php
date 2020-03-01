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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/posts',[
	'as'=>'posts.all',
	'uses'=>'Api\PostController@all'
]);
Route::post('/login',  'Api\Auth\LoginController@login');

Route::get('/posts/self',[

	'as'=> 'posts.self',
	'uses'=> 'Api\PostController@self'
]);
Route::post('/posts/create',[

	'as'=> 'posts.create',
	'uses'=> 'Api\PostController@store'
]);
Route::get('refresh',[
'as' =>'login.refresh',
'uses' => 'Api\Auth\LoginController@refresh'
]);