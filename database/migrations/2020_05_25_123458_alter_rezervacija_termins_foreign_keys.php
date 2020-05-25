<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRezervacijaTerminsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezervacija_termins', function (Blueprint $table) {

            $table->foreign('termin_id')
                ->references('id')
                ->on('termins')
                ->onDelete('set null');

            $table->foreign('rezervacija_id')
                ->references('id')
                ->on('rezervacijas')
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
        Schema::table('rezervacija_termins', function (Blueprint $table) {
            $table->dropForeign(['termin_id']);
            $table->dropColumn('termin_id');
            $table->dropForeign(['rezervacija_id']);
            $table->dropColumn('rezervacija_id');
        });
    }
}
