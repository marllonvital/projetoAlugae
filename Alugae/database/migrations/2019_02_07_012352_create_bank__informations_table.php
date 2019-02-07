<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank__informations', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('numero_do_cartao');
            $table->increments('tipo_do_cartao');
            $table->increments('validade');
            $table->increments('bandeira');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank__informations');
    }
}
