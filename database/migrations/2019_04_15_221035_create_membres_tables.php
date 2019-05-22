<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('membres', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('code');
$table->string('nom');
$table->string('prenom');
$table->string('sexe');

$table->string('email');
$table->text('address');
// $table->string('phone');

$table->integer('ccpc_id')->unsigned();
$table->foreign('ccpc_id')->references('id')->on('ccpcs');


$table->integer('fonction_id')->unsigned();
$table->foreign('fonction_id')->references('id')->on('fonctions');

$table->integer('secteuractivite_id')->unsigned();
$table->foreign('secteuractivite_id')->references('id')->on('secteuractivites');

$table->string('phone');
$table->string('gap');
$table->string('notion_de_base');
$table->integer('pretest_nb');
$table->integer('moyenne_pre');
$table->integer('post_test_nb');
$table->integer('moyenne_pos');
$table->integer('performance');

$table->integer('pretest_acc');
$table->integer('moyenne_pretest_acc');
$table->integer('post_test_acc');
// $table->string('sexe');
// $table->string('image');
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
        //

        Schema::dropIfExists('membres');

    }
}
