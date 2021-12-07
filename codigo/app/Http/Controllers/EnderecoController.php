<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Endereco;

class EnderecoController extends Controller
{
    public function listaendereco()
    {
        return view('endereco.listaendereco');
    }
}
