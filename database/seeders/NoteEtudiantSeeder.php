<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteEtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anneeEncours=DB::table('anneacademiques')->where('encours','=',true)->first();
        $inscriptions=DB::table('inscriptions')->where('anneacademique_id','=',$anneeEncours->id)->get();
        foreach ($inscriptions as $key=>$inscription){
            $eusId=DB::table('uedans_filieres')->where('filiere_id','=',$inscription->filiere_id)->get();

            foreach ($eusId as $key=>$item){


                if($item){
                    DB:: table('noteEtudiants')->insert([
                     /*   'etudiant_id'=>$inscription->etudiant_id,
                        'ue_id'=>$item->ue_id,
                        'session_id'=>$ev->session_id,*/
                        'uedans_filieres_id'=>$item->id,
                        'inscription_id'=>$inscription->id,
                       'notecc'=>random_int(1,20),
                      'notetp'=>random_int(1,20),
                     'notesn'=>random_int(1,20),
                    'notesRattrapages'=>random_int(20,40),


                    ]);
                }


            }


        }


    }
}


