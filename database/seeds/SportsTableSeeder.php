<?php

use Illuminate\Database\Seeder;
use App\Sport;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sportovi = [Sport::BILIJAR, Sport::KUGLANJE, Sport::PIKADO];

        foreach ($sportovi as $sport) {
            Sport::insert([
                'naziv' => $sport
            ]);
        }
    }
}
