<?php

use Illuminate\Database\Seeder;

class TerminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Termin::Class, 10)->create();
    }
}
