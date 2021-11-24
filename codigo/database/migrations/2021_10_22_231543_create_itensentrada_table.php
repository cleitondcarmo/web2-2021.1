<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensentradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensentrada', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('quantidade');
            $table->float('precocompra');
            $table->integer('unidade');
            $table->float('frete');
            $table->unsignedBigInteger('idproduto');
            $table->unsignedBigInteger('identrada');
        });

        Schema::table('itensentrada', function (Blueprint $table){
            #colocando uma chave estranheira
            $table->foreign('idproduto')->references('id')->on('produto')->onDelete('cascade');
            $table->foreign('identrada')->references('id')->on('entrada')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensentrada');
    }
}