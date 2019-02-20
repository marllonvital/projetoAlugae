<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUserTable extends Migration
{

    public function up()
    {
        Schema::create('product_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->date('date_initial')->nullable();
            $table->date('date_final')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });

        Schema::table('product_user', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::table('product_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_user');
    }
}
