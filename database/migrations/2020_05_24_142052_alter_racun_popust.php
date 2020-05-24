<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRacunPopust extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('racun_popusts', function (Blueprint $table) {

            $table->foreign('popust_id')
                ->references('id')
                ->on('popusts')
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
            $table->dropForeign(['popust_id']);
            $table->dropColumn('popust_id');
        });
    }
}
