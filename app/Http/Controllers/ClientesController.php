<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.lista');
    }

    public function novo()
    {
        return view('clientes.formulario');
    }

    public function salvar(Request $request)
    {
        $cliente = new Cliente();

        $cliente->create($request->all());

        return Redirect::to('clientes/novo');
    }
}
