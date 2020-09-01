<?php

use Illuminate\Database\Seeder;
use App\Pice;

class PicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pica = [Pice::FANTA, Pice::COCA_COLA, Pice::ZAJECARSKO, PICE::KISELA_VODA];

        foreach($pica as $pice){
            Pice::insert([
                'Naziv_Pica' => $pice['Naziv_Pica'],
                'Cena_Pica' => $pice['Cena_Pica']
            ]);
        }
    }
}
