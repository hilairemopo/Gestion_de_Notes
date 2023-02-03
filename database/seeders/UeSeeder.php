<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT303',
        'intituleue'=>'reseau',
            'nbrecredit'=>5,
            'typeue'=>'complementaire',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT204',
        'intituleue'=>'Algorithme',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'Architecture',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT302',
            'intituleue'=>'securite',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT202',
            'intituleue'=>'mysql',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT303',
            'intituleue'=>'RESEAU AVANCE',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT304',
            'intituleue'=>'UML',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT305',
            'intituleue'=>'PHP',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT306',
            'intituleue'=>'GENIELOGCIEL',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT307',
            'intituleue'=>'PROJET SOUTENANCE',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT205',
            'intituleue'=>'HTML CSS',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
    }
}
