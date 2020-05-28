<?php

use Illuminate\Database\Seeder;

class PopustsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Popust::Class, 10)->create();
    }
}
