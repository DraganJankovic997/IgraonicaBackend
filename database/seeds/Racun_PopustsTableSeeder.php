<?php

use Illuminate\Database\Seeder;

class Racun_PopustsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Racun_Popust::Class, 10)->create();
    }
}
