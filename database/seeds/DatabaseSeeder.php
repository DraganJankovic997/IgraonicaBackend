<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradsTableSeeder::class);
        $this->call(PozicijasTableSeeder::class);
        $this->call(LokacijasTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(TerensTableSeeder::class);
        $this->call(PopustsTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
        $this->call(PicesTableSeeder::class);
        $this->call(RacunsTableSeeder::class);
//        $this->call(Racun_PopustsTableSeeder::class);
//        $this->call(Radio_UsTableSeeder::class);
//        $this->call(Racun_PicesTableSeeder::class);
        $this->call(TerminsTableSeeder::class);
//        $this->call(KlijentsTableSeeder::class);
//        $this->call(GrupasTableSeeder::class);
//        $this->call(PojedinacsTableSeeder::class);
//        $this->call(RezervacijasTableSeeder::class);
//        $this->call(Rezervacija_TerminsTableSeeder::class);
    }
}
