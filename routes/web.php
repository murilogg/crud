<?php


route::get('usuarios', 'UsuariosController@index');


Route::group(['middleware' => 'web'], function () {
    route::get('/', 'HomeController@index');

    route::auth();

    Auth::routes();

    Route::get('/home', 'HomeController@index');

    route::get('clientes', 'ClientesController@index');

    route::get('clientes/novo', 'ClientesController@novo');

    route::get('clientes/{cliente}/editar', 'ClientesController@editar');

    route::post('clientes/salvar', 'ClientesController@salvar');

    route::patch('clientes/{cliente}', 'ClientesController@atualizar');

    route::delete('clientes/{cliente}', 'ClientesController@deletar');




});



