<?php

//Routes de view principal testes
Route::get('admin/testes/', ['as' => 'admin.testes', 'uses'=>'Admin\TesteController@index']);

//Routes de view Lista de Questões por testes.
Route::get('admin/testes/lista/{id}', ['as' => 'admin.testes.lista', 'uses'=>'Admin\TesteController@show']);

//Routes de salvar testes
Route::get('admin/testes/create', ['as' => 'admin.testes.create', 'uses'=>'Admin\TesteController@create']);
Route::post('admin/testes/store', ['as' => 'admin.testes.store', 'uses'=>'Admin\TesteController@store']);

//Routes de atualizar testes
Route::get('admin/testes/edit/{id}', ['as' => 'admin.testes.edit', 'uses'=>'Admin\TesteController@edit']);
Route::put('admin/testes/update/{id}', ['as' => 'admin.testes.update', 'uses'=>'Admin\TesteController@update']);

//Routes de deletar testes
Route::get('admin/testes/destroy/{id}', ['as' => 'admin.testes.destroy', 'uses'=>'Admin\TesteController@destroy']);

//Routes de view principal questoes
Route::get('admin/questoes/', ['as' => 'admin.questoes', 'uses'=>'Admin\QuestaoController@index']);

//Routes de salvar questoes
Route::get('admin/questoes/create', ['as' => 'admin.questoes.create', 'uses'=>'Admin\QuestaoController@create']);
Route::post('admin/questoes/store', ['as' => 'admin.questoes.store', 'uses'=>'Admin\QuestaoController@store']);

//Routes de atualizar questoes
Route::get('admin/questoes/edit/{id}', ['as' => 'admin.questoes.edit', 'uses'=>'Admin\QuestaoController@edit']);
Route::put('admin/questoes/update/{id}', ['as' => 'admin.questoes.update', 'uses'=>'Admin\QuestaoController@update']);

//Routes de deletar questoes
Route::get('admin/questoes/destroy/{id}', ['as' => 'admin.questoes.destroy', 'uses'=>'Admin\QuestaoController@destroy']);

//Routes de Responder
Route::get('admin/resultado/responder/{id}', ['as' => 'admin.resultado.responder', 'uses'=>'Admin\TesteController@responder']);
Route::post('admin/resultado/resposta/{id}', ['as' => 'admin.resultado.resposta', 'uses'=>'Admin\RespostaController@resposta']);


//Routes de Resultado do teste realizado.
Route::get('admin/resultado/resposta', ['as' => 'admin.resultado.resposta', 'uses'=>'Admin\TesteController@resposta']);