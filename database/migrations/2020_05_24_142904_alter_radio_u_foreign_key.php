<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRadioUForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('radio_us', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('lokacija_id')->unsigned()->nullable();
            $table->integer('pozicija_id')->unsigned()->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('lokacija_id')
                ->references('id')
                ->on('lokacijas')
                ->onDelete('set null');
            $table->foreign('pozicija_id')
                ->references('id')
                ->on('pozicijas')
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
        Schema::table('radio_us', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['lokacija_id']);
            $table->dropColumn('lokacija_id');
            $table->dropForeign(['pozicija_id']);
            $table->dropColumn('pozicija_id');
        });
    }
}
