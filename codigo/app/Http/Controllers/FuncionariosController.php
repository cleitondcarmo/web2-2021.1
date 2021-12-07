<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionarios;

class FuncionariosController extends Controller
{
    public function listafuncionarios(){
        return view('funcionarios.listafuncionarios');
    }
}
