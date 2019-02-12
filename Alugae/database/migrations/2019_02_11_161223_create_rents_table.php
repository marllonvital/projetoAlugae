<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{

    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->string('data_inicial');
            $table->string('data_final');
            $table->string('historico');
            $table->integer('quantidade');
            $table->timestamps();
        });

        Schema::table('rents', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('products')->onDelete('cascade');
        });
        Schema::table('rents', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
