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
Route::get('/project/{project}', 'BasicProjectController@project');
Route::post('/project/{project}', 'BasicProjectController@saveProject');
Route::delete('/project/{project}', 'BasicProjectController@deleteProject');

Route::get('/project/{project}/contact', 'BasicContactController@newContact');
Route::get('/project/{project}/contact/{contact}', 'BasicContactController@getContact');
Route::post('/project/{project}/contact/{contact}', 'BasicContactController@saveContact');
Route::patch('/project/{project}/contact/{contact}', 'BasicContactController@addContact');
Route::delete('/project/{project}/contact/{contact}', 'BasicContactController@deleteContact');
Route::delete('/project/{project}/contact', 'BasicContactController@RemoveContactFromProject');

Route::post('/comment/add', 'BasicCommentController@add');
Route::delete('/comment/delete', 'BasicCommentController@delete');

Route::post('/file/add',     'BasicFileController@add');
Route::delete('/file/delete','BasicFileController@delete');
Route::get('file/download',  'BasicFileController@download');

// Added authentication to the user
Auth::routes();
Route::get('/home', 'HomeController@index');
