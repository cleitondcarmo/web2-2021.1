<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itensvenda;

class ItensvendaController extends Controller
{
    public function listaitensvenda(){
        return view('itensvenda.listaitensvenda');
    }
}
