<?php


route::get('usuarios', 'UsuariosController@index');


Route::group(['middleware' => 'web'], function () {
    route::get('/', 'HomeController@index');

    route::auth();

    route::get('/', 'HomeController@index');


    route::get('clientes', 'ClientesController@index');

    route::get('clientes/novo', 'ClientesController@novo');

    route::post('clientes/salvar', 'ClientesController@salvar');

});


