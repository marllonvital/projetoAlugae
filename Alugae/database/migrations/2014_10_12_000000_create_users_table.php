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
            $table->string('name')->nullable();
            $table->string('cep')->nullable();
            $table->string('cpf')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('number')->nullable();
            $table->string('complement')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
        }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
