<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about',function (){
   return view('about');
});

Route::get('/contact',function (){
   return view('contact');
});

Route::resource('/jobs','JobsController');


Route::get('/profile', function () {
    return view('user.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*asaj test*/
Route::get('ajax',function(){
    return view('message');
});
Route::post('/getmsg','AjaxController@index');


