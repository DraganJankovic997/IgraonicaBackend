<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv')->unique();
            $table->integer('kvadratura');
            $table->string('adresa');
            $table->string('deo_grada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokacijas');
    }
}
