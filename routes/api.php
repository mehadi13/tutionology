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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});

//category request
Route::resource('category', 'API\CategoryController');

//city request
Route::resource('city', 'API\CityController');

//class name request
Route::resource('classname', 'API\ClassNameController');

//gender request
Route::resource('gender', 'API\GenderController');

//location request
Route::resource('location', 'API\LocationController');

//profile request
Route::resource('profile', 'API\ProfileController');

//tution info request
Route::resource('tutioninfo', 'API\TutionInfoController');

//tution info user request
Route::resource('tutioninfouser', 'API\TutionInfoUserController');



/*
Route::get('classname','API\ClassNameController@index');
Route::get('classname/create','API\ClassNameController@create');
Route::post('classname','API\ClassNameController@store');
Route::get('classname/{className}','API\ClassNameController@show');
Route::get('classname/{className}/edit', 'API\ClassNameController@edit');
Route::put('classname/{className}', 'API\ClassNameController@update');
Route::delete('classname/{className}', 'API\ClassNameController@destroy');
*/