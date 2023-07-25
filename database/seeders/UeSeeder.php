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
        'intituleue'=>'Data Communication and Security',
            'nbrecredit'=>6,
            'typeue'=>'complementaire',
            'cathegorie'=>'fundamental'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT304',
        'intituleue'=>'Software Testing and Deployement',
            'nbrecredit'=>3,
            'typeue'=>'optionel',
            'cathegorie'=>'fundamental'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT301',
            'intituleue'=>'Software Architectures and Design',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT302',
            'intituleue'=>'Introduction to Artificial Intelligence',
            'nbrecredit'=>4,
            'typeue'=>'optionel',
            'cathegorie'=>'fundamental'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT308',
            'intituleue'=>'j2e',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT303',
            'intituleue'=>'English3',
            'nbrecredit'=>6,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT304',
            'intituleue'=>'base de donnees',
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
            'intituleue'=>'Computer Systems Engineering',
            'nbrecredit'=>6,
            'typeue'=>'Obligatoire',
            'cathegorie'=>'proffessionel'

      ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT300',
            'intituleue'=>'Internship',
            'nbrecredit'=>12,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT317',
            'intituleue'=>'Information System',
            'nbrecredit'=>4,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
        $faker = Faker::create();
        DB::table('ues')->insert([
            'codeue'=>'ICT318',
            'intituleue'=>'Java Entreprise Edition ',
            'nbrecredit'=>4,
            'typeue'=>'optionel',
            'cathegorie'=>'proffessionel'

        ]);
    }

}
