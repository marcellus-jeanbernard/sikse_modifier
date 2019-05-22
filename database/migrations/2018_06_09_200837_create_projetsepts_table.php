<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetseptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetsepts', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('titre');
$table->text('description');

$table->integer('septpourun_id')->unsigned();
$table->foreign('septpourun_id')->references('id')->on('septpouruns');
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
        Schema::drop('projetsepts');
    }
}
