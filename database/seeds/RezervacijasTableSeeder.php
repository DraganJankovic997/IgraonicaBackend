<?php

use Illuminate\Database\Seeder;

class RezervacijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Rezervacija::Class, 10)->create();
    }
}
