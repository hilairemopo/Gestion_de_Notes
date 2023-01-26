<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecpourFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specpour_filieres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id')->on('filieres');
            $table->integer('specialite_id')->unsigned();
            $table->foreign('specialite_id')->references('id')->on('specialites');
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
        Schema::dropIfExists('specpour_filieres');
    }
}
