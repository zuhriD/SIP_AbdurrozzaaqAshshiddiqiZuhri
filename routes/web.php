<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome',['title' => 'Zuhri Admin']);
});

Route::get('home', function(){
	return view('home');
});

Route::get('user','UsersController@data');
Route::get('user/add','UsersController@add');
Route::post('user','UsersController@addProcess');
Route::get('user/edit/{id}','UsersController@edit');
Route::patch('user/{id}','UsersController@editProcess');
Route::delete('user/{id}','UsersController@delete');

Route::get('role','RolesController@data');
Route::get('role/add','RolesController@add');
Route::post('role','RolesController@addProcess');
Route::get('role/edit/{id}','RolesController@edit');
Route::patch('role/{id}','RolesController@editProcess');
Route::delete('role/{id}','RolesController@delete');