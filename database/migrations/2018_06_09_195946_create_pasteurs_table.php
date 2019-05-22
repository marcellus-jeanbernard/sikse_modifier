<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasteurs', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('nom');
$table->string('email');
$table->text('address');
$table->string('phone');

$table->integer('eglise_id')->unsigned();
$table->foreign('eglise_id')->references('id')->on('eglises');
$table->string('sexe');
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
        Schema::drop('pasteurs');
        
    }
}
