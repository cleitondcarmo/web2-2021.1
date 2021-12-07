<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Financas;

class FinancasController extends Controller
{
    public function showfinancas(){
        return view('financas.show');
    }
}
