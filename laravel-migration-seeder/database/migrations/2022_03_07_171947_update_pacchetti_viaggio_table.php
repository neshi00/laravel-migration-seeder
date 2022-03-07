<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacchetti_viaggio', function (Blueprint $table) {
            $table->smallInteger("acconto_percent")->after("durata_gg");
            
                 
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
            $table->dropColumn('acconto%');
        

            
        });
    }
}
