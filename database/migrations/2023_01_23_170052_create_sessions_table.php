<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semestre');
            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux');
         /*
            $table->string('typesemestre');

         $table->integer('anneacademique_id')->unsigned();
            $table->foreign('anneacademique_id')->references('id')->on('anneacademiques');*/

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
        Schema::dropIfExists('sessions');
    }
}
