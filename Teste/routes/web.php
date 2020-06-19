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

//Route::get('/', 'UserController@index');

//Route::get('teste.index', 'TesteController@index');

//Route::post('teste.create', 'TesteController@create');

    //Route::get('indexTeste', 'TesteController@index')->name('indexTeste');
    //Route::get('create', 'TesteController@create')->name('create');
    //Route::post('create', 'TesteController@store')->name('store');
   // Route::get('edit', 'TesteController@edit')->name('edit');
   // Route::post('edit', 'TesteController@update')->name('edit');
   // Route::get('delete', 'TesteController@destroy')->name('delete');

Route::get('admin/testes/', ['as' => 'admin.testes', 'uses'=>'Admin\TesteController@index']);

Route::get('admin/testes/create', ['as' => 'admin.testes.create', 'uses'=>'Admin\TesteController@create']);
Route::post('admin/testes/store', ['as' => 'admin.testes.store', 'uses'=>'Admin\TesteController@store']);

Route::get('admin/testes/edit/{id}', ['as' => 'admin.testes.edit', 'uses'=>'Admin\TesteController@edit']);
Route::put('admin/testes/update/{id}', ['as' => 'admin.testes.update', 'uses'=>'Admin\TesteController@update']);

Route::get('admin/testes/destroy/{id}', ['as' => 'admin.testes.destroy', 'uses'=>'Admin\TesteController@destroy']);


