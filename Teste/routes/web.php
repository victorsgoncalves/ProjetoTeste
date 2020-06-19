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

//Route::get('questao.index', 'QuestaoController@index');

//Route::post('questao.create', 'QuestaoController@create');

    //Route::get('indexTeste', 'TesteController@index')->name('indexTeste');
    //Route::get('create', 'TesteController@create')->name('create');
    //Route::post('create', 'TesteController@store')->name('store');
   // Route::get('edit', 'TesteController@edit')->name('edit');
   // Route::post('edit', 'TesteController@update')->name('edit');
   // Route::get('delete', 'TesteController@destroy')->name('delete');
   
   // Route::get('indexQuestao', 'QuestaoController@index')->name('indexQuestao');
   //Route::get('create', 'QuestaoController@create')->name('create');
   //Route::post('create', 'QuestaoController@store')->name('store');
  // Route::get('edit', 'QuestaoController@edit')->name('edit');
  // Route::post('edit', 'QuestaoController@update')->name('edit');
  // Route::get('delete', 'QuestaoController@destroy')->name('delete');

Route::get('admin/testes/', ['as' => 'admin.testes', 'uses'=>'Admin\TesteController@index']);

Route::get('admin/testes/create', ['as' => 'admin.testes.create', 'uses'=>'Admin\TesteController@create']);
Route::post('admin/testes/store', ['as' => 'admin.testes.store', 'uses'=>'Admin\TesteController@store']);

Route::get('admin/questoes/create', ['as' => 'admin.questoes.create', 'uses'=>'Admin\QuestaoController@create']);
Route::post('admin/questoes/store', ['as' => 'admin.questoes.store', 'uses'=>'Admin\QuestaoController@store']);

Route::get('admin/testes/edit/{id}', ['as' => 'admin.testes.edit', 'uses'=>'Admin\TesteController@edit']);
Route::put('admin/testes/update/{id}', ['as' => 'admin.testes.update', 'uses'=>'Admin\TesteController@update']);

Route::get('admin/questoes/edit/{id}', ['as' => 'admin.questoes.edit', 'uses'=>'Admin\QuestaoController@edit']);
Route::put('admin/questoes/update/{id}', ['as' => 'admin.questoes.update', 'uses'=>'Admin\QuestaoController@update']);

Route::get('admin/testes/destroy/{id}', ['as' => 'admin.testes.destroy', 'uses'=>'Admin\TesteController@destroy']);

Route::get('admin/questoes/destroy/{id}', ['as' => 'admin.questoes.destroy', 'uses'=>'Admin\QuestaoController@destroy']);


