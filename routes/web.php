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




Route::get('/','AuthController@login');
Route::post('login','AuthController@loginProcess');
Route::get('register','AuthController@register');
Route::post('register/proses','AuthController@registerProcess');
Route::group(['middleware'=>['CekLoginMiddleware','CekRoleMiddleware:1']], function(){
Route::get('home', function(){
	return view('home',['title' => 'Zuhri Admin']);
});

Route::get('logout','AuthController@logout');
//user
Route::get('user','UsersController@data');
Route::get('user/add','UsersController@add');
Route::post('user','UsersController@addProcess');
Route::get('user/edit/{id}','UsersController@edit');
Route::patch('user/{id}','UsersController@editProcess');
Route::delete('user/{id}','UsersController@delete');
//role
Route::get('role','RolesController@data');
Route::get('role/add','RolesController@add');
Route::post('role','RolesController@addProcess');
Route::get('role/edit/{id}','RolesController@edit');
Route::patch('role/{id}','RolesController@editProcess');
Route::delete('role/{id}','RolesController@delete');

});
Route::group(['middleware'=>['CekLoginMiddleware','CekRoleMiddleware:1,2']], function(){
Route::get('home', function(){
	return view('home',['title' => 'Zuhri Admin']);
});
Route::get('user','UsersController@data');
Route::get('profil/{id}','ProfileController@index');
Route::post('profil/create','ProfileController@create');
Route::delete('profil/dell','ProfileController@deleteAllSelected');
Route::patch('profil/edit/{id}','ProfileController@edit');
Route::get('user/editView','UsersController@editView');
Route::get('role','RolesController@data');
});