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

Route::get('/', 'PostsController@index');

Route::get('/users/login', 'UsersController@login');
Route::post('/users/login', 'UsersController@login');
Route::get('/users/add', 'UsersController@add');
Route::get('/users/edit', 'UsersController@edit');
Route::get('/users/delete', 'UsersController@delete');

Route::get('/tasks/add', 'TasksController@add');
