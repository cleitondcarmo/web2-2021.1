<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\relatorios;

class RelatoriosController extends Controller
{
    public function showrelatorios(){
        return view('relatorios.show');
    }
}
