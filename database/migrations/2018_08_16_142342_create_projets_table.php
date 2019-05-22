<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function(Blueprint $table)
        {
            $table->increments('id');


$table->string('titre');
$table->text('description');

$table->integer('department_id')->unsigned();
$table->foreign('department_id')->references('id')->on('departments');
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
        Schema::drop('projets');
    }
}
