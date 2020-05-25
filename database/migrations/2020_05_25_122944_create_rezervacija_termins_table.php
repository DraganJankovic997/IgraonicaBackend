<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervacijaTerminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacija_termins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rezervacija_id')->unsigned()->nullable();
            $table->integer('termin_id')->unsigned()->nullable();
            $table->date('datum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervacija_termins');
    }
}
