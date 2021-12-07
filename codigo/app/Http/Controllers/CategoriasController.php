<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function listacategorias(){
        return view('categorias.listacategorias');
    }
}
