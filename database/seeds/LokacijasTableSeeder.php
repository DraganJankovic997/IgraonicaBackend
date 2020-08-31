<?php

use Illuminate\Database\Seeder;
use App\Lokacija;

class LokacijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lokacije = [Lokacija::BULEVAR, Lokacija::SAVA_CENTAR, Lokacija::LIMAN];

        foreach($lokacije as $lokacija) {
            Lokacija::insert([
                'naziv' => $lokacija['naziv'],
                'kvadratura' => $lokacija['kvadratura'],
                'adresa' => $lokacija['adresa'],
                'deo_grada' => $lokacija['deo_grada'],
                'grad_id' => $lokacija['grad_id']
            ]);
        }
    }
}
