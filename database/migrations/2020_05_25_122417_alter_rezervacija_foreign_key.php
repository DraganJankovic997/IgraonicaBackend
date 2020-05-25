<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRezervacijaForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezervacijas', function (Blueprint $table) {

            $table->foreign('klijent_id')
                ->references('id')
                ->on('klijents')
                ->onDelete('set null');

            $table->foreign('teren_id')
                ->references('id')
                ->on('terens')
                ->onDelete('set null');

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
        Schema::table('rezervacijas', function (Blueprint $table) {
            $table->dropForeign(['klijent_id']);
            $table->dropColumn('klijent_id');
            $table->dropForeign(['teren_id']);
            $table->dropColumn('teren_id');
            $table->dropForeign(['racun_id']);
            $table->dropColumn('racun_id');
        });
    }
}
