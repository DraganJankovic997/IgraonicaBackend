<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterZaposlenisForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->integer('pozicija_trenutna_id')->unsigned()->nullable();
            $table->integer('lokacija_trenutna_id')->unsigned()->nullable();

            $table->foreign('pozicija_trenutna_id')
                ->references('id')
                ->on('pozicijas')
                ->onDelete('set null');

            $table->foreign('lokacija_trenutna_id')
                ->references('id')
                ->on('lokacijas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zaposlenis', function (Blueprint $table) {
            $table->dropForeign(['pozicija_trenutna_id']);
            $table->dropColumn('pozicija_trenutna_id');
            $table->dropForeign(['lokacija_trenutna_id']);
            $table->dropColumn('lokacija_trenutna_id');
        });

    }
}
