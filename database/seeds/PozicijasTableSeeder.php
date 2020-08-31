<?php

use Illuminate\Database\Seeder;
use App\Pozicija;

class PozicijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pozicije = [Pozicija::POSLOVODJA, Pozicija::KASIR, Pozicija::ODRZAVANJE, Pozicija::KONOBAR];

        foreach ($pozicije as $pozicija) {
            Pozicija::insert([
                'naziv' => $pozicija
            ]);
        }
    }
}
