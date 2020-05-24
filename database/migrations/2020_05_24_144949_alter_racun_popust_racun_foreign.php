<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRacunPopustRacunForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('racun_popusts', function (Blueprint $table) {

            $table->foreign('racun_id')
                ->references('id')
                ->on('racuns')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('racun_popusts', function (Blueprint $table) {
            $table->dropForeign(['racun_id']);
            $table->dropColumn('racun_id');
        });
    }
}
