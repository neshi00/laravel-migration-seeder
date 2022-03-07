<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsInPacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacchetti_viaggio', function (Blueprint $table) {
            $table->boolean("ha_assicurazione");
            $table->renameColumn('Documenti_richiesti', 'doc_richiesti');

                 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacchetti_viaggio', function (Blueprint $table) {
            $table->dropColumn('ha_assicurazione');
        

            
        });
    }
}
