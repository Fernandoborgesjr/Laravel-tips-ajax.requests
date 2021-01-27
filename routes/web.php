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

Route::resource('usuarios', 'Form\\TestController')
->names('user')
->parameters(['usuarios'=> 'user']);

Route::get('posts', 'PostController@showForm')->name('posts');
Route::post('/debug', 'PostController@debug')->name('debug');
Route::get('/endereco/{address}', 'AddressController@show');
Route::get('/artigo/{post}', 'PostController@show');
Route::get('/categoria/{category}', 'CategoryController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
