<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;

    protected $table = "produto";

    protected $fillable = ['nome', 'valordecompra', 'valordevenda', 'desconto', 'frete', 'quantidade'];

    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'idproduto', 'id');
    }
    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'idproduto', 'id');
    }
}
