<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Commenti', function (Blueprint $table) {
            $table->bigIncrements('IDCommenti');
            $table->string('Descrizione', 105);
            $table->string('Data', 45);
            $table->foreign('IDPost')->references('IDPost')->on('Post');
            $table->foreign('IDUtente')->references('IDUtente')->on('Utente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Commenti');
    }
}
