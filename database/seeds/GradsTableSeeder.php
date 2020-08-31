<?php

use Illuminate\Database\Seeder;
use App\Grad;
class GradsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gradovi = [Grad::NOVI_SAD, Grad::BEOGRAD, Grad::CACAK, Grad::NIS];

        foreach ($gradovi as $grad) {
            Grad::insert([
                'naziv' => $grad['naziv'],
                'postanski_kod' => $grad['postanski_kod']
            ]);
        }
    }
}
