<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUedansFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uedans_filieres', function (Blueprint $table) {
            $table->id();
            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id')->on('filieres');
            $table->integer('ue_id')->unsigned();
            $table->foreign('ue_id')->references('id')->on('ues');
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
        Schema::dropIfExists('uedans_filieres');
    }
}
