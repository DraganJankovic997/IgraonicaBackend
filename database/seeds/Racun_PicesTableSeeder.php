<?php

use Illuminate\Database\Seeder;

class Racun_PicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Racun_Pice::Class, 10)->create();
    }
}
