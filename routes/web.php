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
    return view('welcome');
});

Route::get('/project', 'BasicProjectController@project');
Route::post('/project', 'BasicProjectController@saveProject');
Route::put('/project', 'BasicProjectController@saveProject');
Route::delete('/project', 'BasicProjectController@saveProject');


Route::get('/contact', 'BasicProjectController@contact');
Route::post('/contact', 'BasicProjectController@saveContact');

// Added authentication to the user
Auth::routes();
Route::get('/home', 'HomeController@index');
