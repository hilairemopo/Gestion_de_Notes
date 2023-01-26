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
    {$faker=Faker::create();
        DB::table('sessions')->insert([
            'semestre'=>1,
        'typesemestre'=>'normale',
        'anneacademique_id'=>1,

        ]);
        $faker=Faker::create();
        DB::table('sessions')->insert([
            'semestre'=>2,
            'typesemestre'=>'normale',
            'anneacademique_id'=>1,

        ]);
        $faker=Faker::create();
        DB::table('sessions')->insert([
            'semestre'=>3,
            'typesemestre'=>' Examen de Rattrapage',
            'anneacademique_id'=>1,

        ]);
        //
    }
}
