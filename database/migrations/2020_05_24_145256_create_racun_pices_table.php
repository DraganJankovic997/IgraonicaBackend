<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacunPicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racun_pices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pice_id')->unsigned()->nullable();
            $table->integer('racun_id')->unsigned()->nullable();     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racun_pices');
    }
}
