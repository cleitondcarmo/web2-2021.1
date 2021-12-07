<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    public function itensentrada(){
        return $this->belongsTo(Itensentrada::class, 'iditensentrada', 'id');
    }
    public function entrada(){
        return $this->belongsTo(Entrada::class, 'identrada', 'id');
    }
    public function itensvenda(){
        return $this->belongsTo(Itensvenda::class, 'iditensvenda', 'id');
    }
    public function venda(){
        return $this->belongsTo(Venda::class, 'idvenda', 'id');
    }
}
