<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->increments('id');
           $table->string('code')->unique();
           $table->string('nom');
           $table->string('prenom');
           $table->string('sexe');
           $table->string('email');
           $table->string('nif');
           $table->string('cin');
           $table->string('profession');
           $table->string('employer');
           
          $table->text('address');

          $table->integer('ccpccommune_id')->unsigned();
$table->foreign('ccpccommune_id')->references('id')->on('ccpccommunes');

$table->integer('fonction_id')->unsigned();
$table->foreign('fonction_id')->references('id')->on('fonctions');

$table->integer('secteuractivite_id')->unsigned();
$table->foreign('secteuractivite_id')->references('id')->on('secteuractivites');
           $table->string('phone');
           $table->date('date_entrer');
           $table->string('image');
             


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
        Schema::dropIfExists('membres');
    }
}
