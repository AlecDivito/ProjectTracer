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

Route::post('/project/new', 'BasicProjectController@newProject');
Route::get('/project/{projectId}', 'BasicProjectController@project');
Route::post('/project/{projectId}', 'BasicProjectController@saveProject');
Route::put('/project/{projectId}', 'BasicProjectController@saveProject');
Route::delete('/project/{projectId}', 'BasicProjectController@saveProject');


Route::get('/contact', 'BasicProjectController@contact');
Route::post('/contact', 'BasicProjectController@saveContact');

// Added authentication to the user
Auth::routes();
Route::get('/home', 'HomeController@index');
