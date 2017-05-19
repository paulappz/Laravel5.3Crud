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

// First Route method – Root URL will match this method


Route::group(['middleware' => ['web']], function() {
 
Route::get('/', function () {
   return view('welcome');
});

Route::post('/signup','LoginController@SignUp');

Route::get('/dashboard','LoginController@getDashboard');

Route::get('/signin','LoginController@SignIn');

});