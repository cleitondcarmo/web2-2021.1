<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = "categorias";

    protected $fillable = ['nome'];

    function venda(){
        return $this->hasMany(Venda::class, 'idcategoria', 'id');
    }
}