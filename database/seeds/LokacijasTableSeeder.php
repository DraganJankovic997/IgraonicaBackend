<?php

use Illuminate\Database\Seeder;

class LokacijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Lokacija::Class, 10)->create();
    }
}
