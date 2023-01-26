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
            'nbrecredit'=>6,
            'typeue'=>'complementaire',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
        'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'bases de donnee',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT305',
            'intituleue'=>'HTML CSS',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
    }
}
