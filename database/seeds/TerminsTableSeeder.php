<?php

use Illuminate\Database\Seeder;
use App\Termin;

class TerminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(0,23) as $number){
            foreach(range(0,59,15) as $minutes){
                Termin::insert([
                    'vreme_termina' => $number .' '. $minutes. 'hr'
                ]);
            }
        }
    }

}
