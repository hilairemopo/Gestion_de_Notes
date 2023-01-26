<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DepatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker = Faker::create();
        DB:: table('departements')->insert([
            'nomdepartement'=>'SCIENCE MATHEMATIQUE ET INFORMATIQUE ',

        ]);
        $faker = Faker::create();
        DB:: table('departements')->insert([
            'nomdepartement'=>' PHYSIQUE',

        ]);
        $faker = Faker::create();
        DB:: table('departements')->insert([
            'nomdepartement'=>' BIOCHIMIE',

        ]);
        $faker = Faker::create();
        DB:: table('departements')->insert([
            'nomdepartement'=>' CHIMIE',

        ]);

        //
    }
}
