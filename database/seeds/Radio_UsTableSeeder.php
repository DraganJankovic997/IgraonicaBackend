<?php

use Illuminate\Database\Seeder;

class Radio_UsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\RadioU::Class, 10)->create();
    }
}
