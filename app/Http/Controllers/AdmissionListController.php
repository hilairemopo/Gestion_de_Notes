<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionListController extends Controller
{
    //
    public function listeForm(){
        $annee = DB::table('anneacademiques')->get();
        $filiere =Filiere::all();
        $niveau=DB::table('niveaux')->get();
        return view('pages.AdmissionList',[
            'annee'=>$annee,
            'filiere'=>$filiere,
            'niveau'=>$niveau
        ]);
    }
    public function liste(Request $request){
        $filiere=json_decode($request->get("filiere"));
        $niveau=json_decode($request->get("niveau"));
        $annee=json_decode($request->get("annee"));
    $etudiantsAdmis =[];
        $inscriptions=Inscription::where('filiere_id',"=",$filiere->id)->where('niveau_id',"=",$niveau->id)->where("anneacademique_id","=",$annee->id)->get();
        $countinscription = 0;
        $semestres= DB::table("sessions")->where("niveau_id","=",$niveau->id)->pluck("id");

        foreach ($inscriptions as $key=> $inscription)
        {
            $countinscription++;
            $decision=DB::table("decision_mgps")->where("inscription_id","=",$inscription->id);

            $countDecisions=$decision->whereIn("session_id",$semestres)->where("decision","=","ADMIS");

            if($countDecisions->count()==count($semestres)){
                $etudiantsAdmis[$key]=(object)[
                    "inscription"=>$inscription,
                    'mgps'=>$countDecisions->sum("mgp"),


                ];
            }

        }


      return view('pages.Listes_dadmis',[
          "inscription"=>$etudiantsAdmis,
          "filiere"=>$filiere,
          "niveau"=>$niveau,
          "annee"=>$annee,
          "countInscription"=>$countinscription,
          'nomberAdmins'=>count($etudiantsAdmis),
          'nombreEchoue'=> $countinscription-count($etudiantsAdmis),
          ]);
    }
}
