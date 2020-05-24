<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRacunPicePiceForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('racun_pices', function (Blueprint $table) {

            $table->foreign('pice_id')
                ->references('id')
                ->on('pices')
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
        Schema::table('racun_pices', function (Blueprint $table) {
            $table->dropForeign(['pice_id']);
            $table->dropColumn('pice_id');
        });
    }
}
