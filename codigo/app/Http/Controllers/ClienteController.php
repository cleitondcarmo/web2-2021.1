<?php

#CLEITON APARECIDO DO CARMO SILVA

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function listacliente(){
        return view('clientes.listacliente');
    }
}
