<?php

use Illuminate\Database\Seeder;

class Rezervacija_TerminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Rezervacija_Termin::Class, 10)->create();
    }
}
