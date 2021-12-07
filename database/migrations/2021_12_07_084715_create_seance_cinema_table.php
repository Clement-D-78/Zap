<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeanceCinemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seance_cinema', function (Blueprint $table) {
            // idFilm, id, titre, horaire, langue, nb place, num_salle)
            $table->id();
            //idFilm
            $table->foreignId('film_id');

            //$table->foreign('id_film');
            $table->string('horaire')->nullable();
            $table->string('langage')->nullable();
            $table->integer('nb_place')->nullable();
            $table->integer('numero_salle')->nullable();
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
        Schema::dropIfExists('seance_cinema');
    }
}
