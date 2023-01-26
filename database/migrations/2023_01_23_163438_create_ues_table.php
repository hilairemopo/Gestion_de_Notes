<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codeue');
            $table->string('intituleue');
            $table->integer('nbrecredit');
            $table->string('typeue');
            $table->string('cathegorie');

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
        Schema::dropIfExists('ues');
    }
}
