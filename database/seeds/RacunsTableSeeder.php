<?php

use Illuminate\Database\Seeder;

class RacunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Racun::Class, 10)->create();
    }
}
