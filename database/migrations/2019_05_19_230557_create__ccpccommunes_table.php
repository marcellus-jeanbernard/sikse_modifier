<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcpccommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccpccommunes', function (Blueprint $table) {
            $table->increments('id');
           $table->string('name');

           $table->string('email');
            $table->text('adresse');
           $table->string('telephone');

           $table->string('nom_cordexecutif');
           $table->string('prenom_cordexecutif');
           $table->string('email_cordexecutif');
           $table->string('adresse_cordexecutif');
           $table->string('telephone_cordexecutif');
           $table->string('image1');

           $table->string('nom_cordlogistique');
           $table->string('prenom_cordlogistique');
           $table->string('email_cordlogistique');
           $table->string('adresse_cordlogistique');
           $table->string('telephone_cordlogistique');
           $table->string('image2');


           
           






           

            
            $table->integer('departement_id')->unsigned();
            $table->foreign('departement_id')->references('id')->on('departments');




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
        Schema::dropIfExists('ccpccommunes');
    }
}
