<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notesur');
            $table->integer('rattrapages')->nullable();
            $table->integer('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants');
            $table->integer('ue_id')->unsigned();
            $table->foreign('ue_id')->references('id')->on('ues');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->integer('evaluation_id')->unsigned();
            $table->foreign('evaluation_id')->references('id')->on('evaluations');
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
        Schema::dropIfExists('participations');
    }
}
