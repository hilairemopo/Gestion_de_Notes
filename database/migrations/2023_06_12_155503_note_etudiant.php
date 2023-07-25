<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoteEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noteEtudiants',function (Blueprint $table){
            $table->increments('id');
          /*  $table->integer('etudiant_id')->unsigned();

          $table->foreign('etudiant_id')->references('id')->on('etudiants');
            $table->integer('ue_id')->unsigned();
            $table->foreign('ue_id')->references('id')->on('ues');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');

          */
            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')->references('id')->on('inscriptions');
            $table->integer('uedans_filieres_id')->unsigned();
            $table->foreign('uedans_filieres_id')->references('id')->on('uedans_filieres');
            $table->integer('notecc')->nullable();
            $table->integer('notetp')->nullable();;
            $table->integer('notesn')->nullable();;
            $table->integer('notesRattrapages')->nullable();


            $table->timestamps();
        });


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
