<?php

namespace App\services;

use Illuminate\Support\Facades\DB;

class InscriptionService
{

    public static function isInscription($etudiantId){

        $anneeEnCours=DB::table("anneacademiques")->where("encours","=",true)->first()->id;

        if($anneeEnCours){
            $inscrit=DB::table("inscriptions")->where(["etudiant_id"=>$etudiantId,"anneacademique_id"=>$anneeEnCours])->first();
            if ($inscrit){
                return true;
            }else{
                return  false;
            }

        }

        return false;


}

}
