<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = ['nome', 'debito'];

    function endereco(){
        return $this->hasMany(Endereco::class, 'idcliente', 'id');
    }
    function venda(){
        return $this->hasMany(Venda::class, 'idcliente', 'id');
    }
}
