<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    public function listaitensentrada(){
        return view('itensentrada.listaitensentrada');
    }
}
