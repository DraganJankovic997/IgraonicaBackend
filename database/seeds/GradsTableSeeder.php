<?php

use Illuminate\Database\Seeder;

class GradsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Grad::Class, 10)->create();
    }
}
