<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaAmiciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lista_amici', function (Blueprint $table) {
            $table->bigIncrements('IDListaAmici');
            $table->foreign('IDUtente')->references('IDUtente')->on('Utente');
            $table->integer('IDUtenteAmico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lista_amici');
    }
}
