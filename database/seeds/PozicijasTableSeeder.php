<?php

use Illuminate\Database\Seeder;

class PozicijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Pozicija::Class, 10)->create();
    }
}
