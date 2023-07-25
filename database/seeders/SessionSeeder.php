<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('sessions')->insert([
            'semestre' => 1,
            //'typesemestre'=>'normale',
            // 'anneacademique_id'=>1,
            'niveau_id' => 1,

        ]);
        {
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 2,
                //'typesemestre'=>'normale',
                // 'anneacademique_id'=>1,
                'niveau_id' => 1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 3,
                //'typesemestre'=>'normale',
                // 'anneacademique_id'=>1,
                'niveau_id' => 2,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 4,
                'niveau_id' => 2
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 5,
                'niveau_id' => 3
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 6,
                'niveau_id' => 3
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 7,
                'niveau_id' => 4
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 8,
                'niveau_id' => 4
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 9,
                'niveau_id' => 5
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);    $faker = Faker::create();
            DB::table('sessions')->insert([
                'semestre' => 10,
                'niveau_id' => 5
                //  'typesemestre'=>' Examen de Rattrapage',
                //  'anneacademique_id'=>1,

            ]);
            //
        }
    }
}
