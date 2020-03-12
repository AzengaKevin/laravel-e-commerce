<?php

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::resource('departments', 'DepartmentController');
Route::post('/', 'ProductsController@store')->name('store');

//Sub-department routes
Route::get('/departments/{department}/sub-departments/create', 'SubDepartmentController@create')->name('sub-department.create');
Route::post('/departments/{department}/sub-departments', 'SubDepartmentController@store')->name('sub-department.store');

//Product routes
Route::resource('items', 'ItemController');

//Front End Products / Items Routes
Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('/products/{item}-{slug}', 'ProductsController@show');

//Adverts Routes
Route::get('/adverts', 'AdvertController@index')->name('adverts.index');
Route::get('/adverts/create', 'AdvertController@create')->name('adverts.create');
Route::post('/adverts', 'AdvertController@store')->name('adverts.store');
Route::delete('/adverts/{advert}', 'AdvertController@destroy')->name('adverts.destroy');

