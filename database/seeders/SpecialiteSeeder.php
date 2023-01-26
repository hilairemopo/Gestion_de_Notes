<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('specialites')->insert([
        'nomspecialite'=>'MAT',
            'descriptionspecialite'=>'Matematique',
        ]);
        $faker = Faker::create();
        DB::table('specialites')->insert([
            'nomspecialite'=>'PHY',
            'descriptionspecialite'=>'PHYSIQUE',
        ]);
        $faker = Faker::create();
        DB::table('specialites')->insert([
            'nomspecialite'=>'CHI',
            'descriptionspecialite'=>'CHIMIE',
        ]);
        $faker = Faker::create();
        DB::table('specialites')->insert([
            'nomspecialite'=>'ICT',
            'descriptionspecialite'=>'INFORMATION AND COMMUNICATION TECHNOLOGY FOR DEVELOPPMENT',
        ]);
        //
    }
}
