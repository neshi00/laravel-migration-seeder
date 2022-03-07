<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti_viaggio', function (Blueprint $table) {
            $table->id();
            $table->string("destinazione", 50);
            $table->string("volo", 100);
            $table->string("hotel", 100);
            $table->smallInteger("acconto%");
            $table->float("prezzo", 5, 2);
            $table->boolean("ha_Assicurazione");
            $table->string("Documenti_richiesti", 100);
            $table->string("regole_covid", 100);
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
        Schema::dropIfExists('pacchetti_viaggio');
    }
}
