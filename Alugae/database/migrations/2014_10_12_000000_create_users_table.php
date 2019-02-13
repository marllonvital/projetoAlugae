USER
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cep')->unique();
            $table->string('cpf')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('cidade');
            $table->string('telefone');
            $table->integer('numero');
            $table->string('complemento');
            $table->timestamps();
        });
        }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
