<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DecisionMgp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('decision_mgps',function (Blueprint $table){
           $table->increments('id');
            /*$table->integer('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants');
            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id')->on('filieres');
             $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux');
              $table->integer('anneacademique_id')->unsigned();
            $table->foreign('anneacademique_id')->references('id')->on('anneacademiques');
*/
            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')->references('id')->on('inscriptions');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->double('mgp');
            $table->string('decision');
          //  $table->string('credit');






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
        Schema::dropIfExists('decision_mgps');
    }
}
