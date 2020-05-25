<?php

use Illuminate\Database\Seeder;

class KlijentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Klijent::Class, 10)->create();
    }
}
