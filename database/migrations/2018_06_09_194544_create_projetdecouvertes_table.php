<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetdecouvertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('projetdecouvertes', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('titre');
$table->text('description');

$table->integer('decouverte_id')->unsigned();
$table->foreign('decouverte_id')->references('id')->on('decouvertes');
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
        Schema::drop('projetdecouvertes');
    }
}
