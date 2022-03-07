<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPacchettiViaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacchetti_viaggio', function (Blueprint $table) {
            $table->smallInteger("num_persone")->after("destinazione");
            $table->smallInteger("durata_gg")->after("hotel");
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
            $table->dropColumn("num_persone");
            $table->dropColumn("durata_gg");
        });
    }
}
