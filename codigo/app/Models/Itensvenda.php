<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itensvenda extends Model
{
    use HasFactory;

    protected $table = "itensvenda";

    protected $fillable = ['valorvenda', 'quantidade', 'idproduto', 'idvenda'];

    public function produto(){
        return $this->belongsTo(Produto::class, 'idproduto', 'id');
    }

    public function venda(){
        return $this->belongsTo(Venda::class, 'idvenda', 'id');
    }
}
