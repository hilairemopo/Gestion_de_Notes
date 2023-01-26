<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $fake = Faker::create();
        
      for($i=0;$i<=10;$i++){
        DB:: table('etudiants')->insert([
            'matricule'=>'0000'.$i,
            'nom'=> $fake->lastName,
            
            'prenom'=>$fake->firstName,

            'datenaiss'=>$fake->date,
            'lieu'=>$fake->city,
            'sex'=>$fake->randomElement([
                'M',
                'F'
            ])

        ]) ;


      }  //
    }
}
