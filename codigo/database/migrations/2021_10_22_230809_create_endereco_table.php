<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('logradouro',60);
            $table->string('bairro',60);
            $table->string('cidade',60);
            $table->string('uf',60);
            $table->unsignedBigInteger('idcliente');
        });

        Schema::table('endereco', function (Blueprint $table){
            #colocando uma chave estranheira
            $table->foreign('idcliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
