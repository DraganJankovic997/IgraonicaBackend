<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTerensForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('terens', function (Blueprint $table) {
            $table->integer('sport_id')->unsigned();
            $table->integer('lokacija_id')->unsigned();

            $table->foreign('lokacija_id')
                ->references('id')
                ->on('lokacijas')
                ->onDelete('cascade');
            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
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
        Schema::table('terens', function (Blueprint $table) {
            $table->dropForeign(['sport_id']);
            $table->dropColumn('sport_id');
            $table->dropForeign(['lokacija_id']);
            $table->dropColumn('lokacija_id');
        });
    }
}
