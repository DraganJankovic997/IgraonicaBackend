<?php

use Illuminate\Database\Seeder;
use App\Popust;

class PopustsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popusti = [Popust::STUDENTSKI, Popust::KUPON, Popust::REDOVNI];

        foreach ($popusti as $popust) {
            Popust::insert([
                'oznaka_popust' => $popust['oznaka_popusta'],
                'vrednost_popust' => $popust['vrednost_popusta']
            ]);
        }
    }
}
