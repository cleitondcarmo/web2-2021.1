<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = "compras";

    protected $fillable = ['valortotal', 'idfornecedor'];

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'idfornecedor', 'id');
    }

    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'identrada', 'id');
    }
}
