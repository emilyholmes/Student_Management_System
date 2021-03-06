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

Route::get('/', 'PageController@index');

// User routing
Route::get('/user/show/{user}', 'UserController@show');

Route::get('/login', function (){
    return view('login.index');
});

Route::resource('/course', 'CourseController');
Route::get('course/{course}/email', 'CourseController@compose');