<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Compras;

class ComprasController extends Controller
{
    public function listacompras(){
        return view('compras.listacompras');
    }
}
