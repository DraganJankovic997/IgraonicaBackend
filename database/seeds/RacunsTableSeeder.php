<?php

use Illuminate\Database\Seeder;
use App\Racun;

class RacunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $racuni = [Racun::RACUN_PRVI, Racun::RACUN_DRUGI];

        foreach($racuni as $racun){
            Racun::insert([
                'ukupno' => $racun['ukupno'],
                'placeno' => $racun['placeno']
            ]);
        }
    }
}
