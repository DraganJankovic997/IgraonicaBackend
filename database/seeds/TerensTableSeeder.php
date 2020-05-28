<?php

use Illuminate\Database\Seeder;

class TerensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Teren::Class, 10)->create();
    }
}
