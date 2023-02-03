<?php

namespace Database\Seeders;

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
        $this->call( [EtudiantSeeder::class,
            UeSeeder::class,
            DepatementSeeder::class,
            NiveauxSeeder::class,

            SpecialiteSeeder::class,
            FiliereSeeder::class,


            AnneAcademiqueSeeder::class,
            UeSeeder::class,
            SessionSeeder::class,
            UedansFiliereSeeder::class,
            EvaluationSeeder::class,
            InscriptionSeeder::class,
            PaiementSeeder::class,
            ParticipationSeeder::class,




            //AnneAcademiqueSeeder::class,
        ]);

        // \App\\User::factory(10)->create();
    }
}
