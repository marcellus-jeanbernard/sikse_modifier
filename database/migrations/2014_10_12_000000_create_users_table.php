<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                      $table->increments('id');
          
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->text('bio');
            $table->string('avatar');
            $table->string('role');
            $table->string('name');
            $table->string('prenom');
            $table->timestamp('last_login');
            $table->integer('active');
            $table->string('remember_token');
            $table->boolean('verified')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
