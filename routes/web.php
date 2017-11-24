<?php

//ADMIN
Route::get('/dashboard', 'AdminController@index');
Route::get('/them-bai-viet', 'AdminController@insert');
Route::get('/chinh-sua-bai-viet/{slug}', 'AdminController@updateList');
Route::get('/chinh-sua-bai-viet/bai-viet/{slug}', 'AdminController@update');
Route::post('/insertPostAction', 'AdminController@insertAction');
Route::post('/updatePostAction/{id}', 'AdminController@updateAction');
Route::get('/deletePost/{id}', 'AdminController@delete');
Route::get('/deletePostAction/{id}', 'AdminController@deleteAction');

Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@about');
Route::get('/lien-he', 'HomeController@contact');

Route::get('/login', 'HomeController@login');
Route::post('/loginAction', 'HomeController@loginAction');
Route::get('/logout', 'HomeController@logout');
Route::get('/dang-bai', 'PostController@insert');

Route::get('/{slug}', 'CategoryController@index');
Route::get('/bai-viet/{slug}', 'PostController@index');


