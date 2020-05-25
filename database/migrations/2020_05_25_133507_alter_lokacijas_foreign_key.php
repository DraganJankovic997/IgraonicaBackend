<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLokacijasForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokacijas', function (Blueprint $table) {
            $table->integer('grad_id')->unsigned()->nullable();

            $table->foreign('grad_id')
                    ->references('id')
                    ->on('grads')
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
        Schema::table('lokacijas', function (Blueprint $table) {
            $table->dropForeign(['grad_id']);
        });
        Schema::table('lokacijas', function (Blueprint $table) {
            $table->dropColumn('grad_id');
        });
    }
}
