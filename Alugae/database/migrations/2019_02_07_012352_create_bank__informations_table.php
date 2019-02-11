<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankInformationsTable extends Migration
{

    public function up()
    {
        Schema::create('bank_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_do_cartao');
            $table->string('tipo_do_cartao');
            $table->string('validade');
            $table->string('bandeira');
            $table->string('usuario_nome');
            $table->timestamps();
        });

        Schema::table('bank_informations', function (Blueprint $table) {
            $table->foreign('usuario_nome')->references('nome')->on('users')->onDelete('cascade');
    }

    public function down()
    {
        Schema::dropIfExists('bank__informations');
    }
}
