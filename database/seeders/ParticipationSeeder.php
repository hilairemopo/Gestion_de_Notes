<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ParticipationSeeder extends Seeder
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
                $ev=DB::table('evaluations')->where('session_id','=',$item->session_id
                )->first();

                if($ev){
                    DB:: table('participations')->insert([
                        'notesur'=>random_int(20,$ev->notesur),

                        'etudiant_id'=>$inscription->id,
                        'ue_id'=>$item->ue_id,
                        'evaluation_id'=>$ev->id,
                        'session_id'=>$ev->session_id


                    ]);
                }


            }


        }


    }
}
