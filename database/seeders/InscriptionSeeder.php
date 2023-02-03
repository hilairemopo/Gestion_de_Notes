<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $faker=Faker::create();
        $filiers=DB::table('filieres')->get()->pluck('id');
        $etudiants=DB::table('etudiants')->get();
        $niveaux= DB::table('niveaux')->get()->pluck('id');

        foreach ($etudiants as $etudiant){

            DB::table('inscriptions')->insert([
                'anneacademique_id'=>1,
                'filiere_id'=>1,
                'niveau_id'=>3,
                'etudiant_id'=>$etudiant->id]);
        }

    }
}
