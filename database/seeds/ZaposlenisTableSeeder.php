<?php

use Illuminate\Database\Seeder;

class ZaposlenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Zaposleni::Class,10)->create();
    }
}
