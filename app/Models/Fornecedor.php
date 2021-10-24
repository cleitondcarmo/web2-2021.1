<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedor";

    protected $fillable = ['nome', 'endereco', 'email'];

    function entrada(){
        return $this->hasMany(Entrada::class, 'idfornecedor', 'id');
    }
}
