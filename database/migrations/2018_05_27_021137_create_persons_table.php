<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');

$table->string('nom');
$table->string('prenom');
$table->date('dateNaissance');
$table->string('lieuNaissane');
$table->string('statutCivil');
$table->string('sexe');
$table->text('adresse');
$table->string('email');
$table->string('phone');
$table->string('profession');
$table->string('groupeSanguin');

$table->integer('occupationactuelle_id')->unsigned();
$table->foreign('occupationactuelle_id')->references('id')->on('occupationactuelles');

$table->integer('secteuractivite_id')->unsigned();
$table->foreign('secteuractivite_id')->references('id')->on('secteuractivites');

$table->integer('coordination_id')->unsigned();
$table->foreign('coordination_id')->references('id')->on('coordinations');

$table->integer('commission_id')->unsigned();
$table->foreign('commission_id')->references('id')->on('commissions');

$table->string('statut');
$table->string('laquelle');
$table->string('quandFrequenter');

$table->string('nomPersNorm');
$table->text('adressePersNorm');
$table->string('emailPersNorm');
$table->string('phonePersNorm');
$table->string('lienPersNorm');

$table->string('nomPersUrg');
$table->text('adressePersUrg');
$table->string('emailPersUrg');
$table->string('phonePersUrg');
$table->string('lienPersUrg');





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
        Schema::dropIfExists('persons');
    }
}
