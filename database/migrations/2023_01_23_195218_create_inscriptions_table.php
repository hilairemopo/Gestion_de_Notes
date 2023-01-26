<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anneacademique_id')->unsigned();
            $table->foreign('anneacademique_id')->references('id')->on('anneacademiques');

            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id')->on('filieres');

            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux');

            $table->integer('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants');
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
        Schema::dropIfExists('inscriptions');
    }
}
