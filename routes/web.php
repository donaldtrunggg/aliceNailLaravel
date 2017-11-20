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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@about');
Route::get('/lien-he', 'HomeController@contact');

Route::get('/login', 'HomeController@login');
Route::post('/loginAction', 'HomeController@loginAction');
Route::get('/logout', 'HomeController@logout');
Route::get('/dang-bai', 'PostController@insert');

Route::get('/{slug}', 'CategoryController@index');
Route::get('/bai-viet/{slug}', 'PostController@index');
