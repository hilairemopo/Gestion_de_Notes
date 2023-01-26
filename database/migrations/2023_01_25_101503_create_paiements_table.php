<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->increments('id');

            $table->date('datePaiement');
            $table->string('numerodeRecue');
            $table->string('RecuePaiement');
            $table->string('montant');
            $table->string('Banque');
            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')->references('id')->on('inscriptions');
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
        Schema::dropIfExists('paiements');
    }
}
