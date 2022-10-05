<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utente', function (Blueprint $table) {
            $table->bigIncrements('IDUtente');
            $table->string('Nome', 45);
            $table->string('Cognome', 45);
            $table->string('Telefono', 45);
            $table->string('Indirizzo', 80);
            $table->string('Codice Fiscale', 16);
            $table->string('Data di nascita', 45);
            $table->string('E-Mail', 45);
            $table->string('Password', 45);
            $table->char('Visibilità', 1);
            $table->string('Descrizione', 100);
            $table->string('Alert', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Utente');
    }
}
