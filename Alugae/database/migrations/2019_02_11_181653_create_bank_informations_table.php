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
            $table->string('number_card');
            $table->string('validity');
            $table->string('type_card');
            $table->string('flag');
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('bank_informations', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_informations');
    }
}
