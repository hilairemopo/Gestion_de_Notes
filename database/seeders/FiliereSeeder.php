<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$faker=Faker::create();
        DB::table('filieres')->insert([
           'intitulefiliere'=>'ICT',
            'descriptionfiliere'=>'INFORMATION AND COMMUNICATION TECHNOLOGIE',
            'departement_id'=>1,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'G.s',
            'descriptionfiliere'=>'Geoscience',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'phy',
            'descriptionfiliere'=>'PHYSIQUE',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'phy',
            'descriptionfiliere'=>'PHYSIQUE',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'INF',
            'descriptionfiliere'=>'informatique fondamental',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'phy',
            'descriptionfiliere'=>'PHYSIQUE',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'phy.Q',
            'descriptionfiliere'=>'PHYSIQUE Quantique',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'CH.0',
            'descriptionfiliere'=>'CHIMIE ORGANIQUE',
            'departement_id'=>2,
        ]); $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'B.H',
            'descriptionfiliere'=>'BIOLOGIE HUMAINE ',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'B.V',
            'descriptionfiliere'=>'BIOLOGIE VEGETAL',
            'departement_id'=>2,
        ]);
        $faker=Faker::create();
        DB::table('filieres')->insert([
            'intitulefiliere'=>'.A ',
            'descriptionfiliere'=>'BIOLOGIE ANIMAL',
            'departement_id'=>2,
        ]);

        //
    }
}
