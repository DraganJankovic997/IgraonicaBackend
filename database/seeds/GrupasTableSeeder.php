<?php

use Illuminate\Database\Seeder;

class GrupasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Grupa::Class, 10)->create();
    }
}
