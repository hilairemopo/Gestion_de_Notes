<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UedansFiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $ues= DB::table('ues')->get()->pluck('id');
        //$filiere = DB::table('filieres')->get()->pluck('id');
                foreach ($ues as $ue){
                    DB::table('uedans_filieres')->insert([
                        'niveau_id' => 3,
                        'session_id' => 1,
                        'filiere_id' => 1 ,
                        'ue_id'=>$ue,
                    ]);
                    DB::table('uedans_filieres')->insert([
                        'niveau_id' => 3,
                        'session_id' => 2,
                        'filiere_id' => 1 ,
                        'ue_id'=>$ue,
                    ]);
                    /*
                    DB::table('uedans_filieres')->insert([
                        'niveau_id' => 3,
                        'session_id' => 3,
                        'filiere_id' => 1 ,
                        'ue_id'=>$ue,
                    ]);*/
                }


   /**
    *      DB::table('uedans_filieres')->insert([
   'niveau_id' => 1,
   'session_id' => 2,
   'filiere_id' => $faker->randomElement($filiere) ,
   'ue_id'=>$faker->randomElement($ues),
   ]);

   DB::table('uedans_filieres')->insert([
   'niveau_id' => 2,
   'session_id' => 1,
   'filiere_id' => $faker->randomElement($filiere) ,
   'ue_id'=>$faker->randomElement($ues),
   ]);

   DB::table('uedans_filieres')->insert([
   'niveau_id' => 2,
   'session_id' => 3,
   'filiere_id' => $faker->randomElement($filiere) ,
   'ue_id'=>$faker->randomElement($ues),
   ]);

   DB::table('uedans_filieres')->insert([
   'niveau_id' => 1,
   'session_id' => 2,
   'filiere_id' => $faker->randomElement($filiere) ,
   'ue_id'=>$faker->randomElement($ues),
   ]);
    */
    }

        }
