<?php



Route::group(['middleware'=>'web'], function() {
    route::get('/','HomeController@index');

    route::auth();

    route::get('/','HomeController@index');

    route::get('usuarios','UsuariosController@index');

    route::get('clientes','ClientesController@index');

    route::get('clientes/novo','ClientesController@novo');

    route::get('clientes/salvar','ClientesController@salvar');

});


