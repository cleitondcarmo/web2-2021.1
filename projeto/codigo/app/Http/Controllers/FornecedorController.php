<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //
    public function show(){
        $fornecedor = Fornecedor::all();
        echo $fornecedor;
    }
}
