<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupas', function (Blueprint $table) {
            $table->integer('klijent_id')->unsigned();
            $table->string('naziv');
            $table->string('opis');

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
        Schema::dropIfExists('grupas');
    }
}
