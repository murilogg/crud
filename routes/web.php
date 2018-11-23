<?php


route::get('usuarios', 'UsuariosController@index');


Route::group(['middleware' => 'web'], function () {
    route::get('/', 'HomeController@index');

    route::auth();

    route::get('clientes', 'ClientesController@index');

    route::get('clientes/novo', 'ClientesController@novo');

    route::get('clientes/{cliente}/editar', 'ClientesController@editar');

    route::post('clientes/salvar', 'ClientesController@salvar');

    Auth::routes();

    Route::get('/home', 'HomeController@index');

});



