<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnneAcademiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker= Faker::create();
        DB:: table('anneacademiques')->insert([
            'annee'=>'2021/2022',
            'encours'=>true

        ]);

        //
    }
}
