<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePojedinacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojedinacs', function (Blueprint $table) {
            $table->integer('klijent_id')->unsigned();
            $table->string('jmbg')->unique();

            $table->foreign('klijent_id')
                ->references('id')
                ->on('klijents')
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
        Schema::dropIfExists('pojedinacs');
    }
}
