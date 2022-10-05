<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRichiestaAmiciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Richiesta_amici', function (Blueprint $table) {
            $table->bigIncrements('IDRichieste');
            $table->foreign('IDUtente')->references('IDUtente')->on('Utente');
            $table->integer('IDRichiestaUtente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Richiesta_amici');
    }
}
