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
        $table->string('validade');
        $table->string('tipo_do_cartao');
        $table->string('bandeira');
        $table->integer('usuario_id')->unsigned()->nullable();
        $table->timestamps();
    });

    Schema::table('bank_informations', function (Blueprint $table) {
        $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
    });
    }

    public function down()
    {
        Schema::dropIfExists('bank_informations');
    }
