<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    use HasFactory;

    protected $table = "funcionarios";

    protected $fillable = ['nome', 'salario'];

    function venda(){
        return $this->hasMany(Venda::class, 'idfuncionario', 'id');
    }
}
