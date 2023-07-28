<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\NoteEtudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PvrController extends Controller
{
    //
    public function pvrl(){
        $annee = DB::table('anneacademiques')->get();
        $filiere =DB::table('filieres')->get();
        $niveau=DB::table('niveaux')->get();
        return view('pages.pvr',[
            'annee'=>$annee,
            'filiere'=>$filiere,
            'niveau'=>$niveau
        ]);
    }


    public function pvrfile(Request $request){


        $filiere=json_decode($request->get("filiere"));
        $niveau=json_decode($request->get("niveau"));
        $annee=json_decode($request->get("annee"));

        $ueDansFiliere=DB::table("uedans_filieres")->where("filiere_id","=",$filiere->id)->pluck("ue_id");
        $matieres=DB::table("ues")->whereIn("id",$ueDansFiliere)->get();
        $countCrd=DB::table("ues")->whereIn("id",$ueDansFiliere)->sum("nbrecredit");
        $semestres=DB::table("sessions")->where("niveau_id","=",$niveau->id)->get();


        $inscriptions=Inscription::where('filiere_id','=',$filiere->id)->where("niveau_id","=",$niveau->id)->where("anneacademique_id","=",$annee->id)->get();
     $countinscription = 0;
        $etudiants=[];


        $countinscription = 0;
        foreach ($inscriptions as  $key=> $inscription)

        {
            $countinscription++;
          //  $note=NoteEtudiant::notefinal();

            $etu=DB::table("etudiants")->find($inscription->etudiant_id);

            $etudiants[$key]=(object)[
                "etudiant"=>$etu,
                "decision"=>$this->getDecisionBysemestreById($inscription->id,count($semestres)),
                "moyenne"=>$this->calculNoteFinalMatiereBySemestreByEtudiant($semestres,$inscription->id,$annee->annee,$etu->id,$filiere->id),
                "semestres"=>$semestres
               // "credicapitalise"=>NoteService::creditCapitalise($note)
            ];

        }







    return view('pages.pvrFile',['etudiants'=>$etudiants,

       "countinscription"=>$countinscription,
           // 'notes'=>$notes,
            'filiere'=>$filiere,
            'niveau'=>$niveau,
            'annee'=>$annee,
            'matieres'=>$matieres,
            'nbrecredit'=>$countCrd,
        'nomberAdmins'=>count($etudiants),

        ]);

}

public function calculNoteFinalMatiereBySemestreByEtudiant($semestres,$inscriptionId,$annee,$etudiantId,$filiere){
        $noteFinaleBySemestreByMatiere=[];

            $matieres=DB::table("uedans_filieres")->where("filiere_id","=",$filiere)-> get();
            foreach ($matieres as $key=>$matiere){

                $note=NoteEtudiant::where("uedans_filieres_id","=",$matiere->id)->where("inscription_id","=",$inscriptionId)->first();
                if($note){
                    $noteF=$note->appends['noteFinale']."\n/S".$this->semestreSession($matiere->session_id)."/".$annee;
                }else{
                    $noteF="";
                }


                $noteFinaleBySemestreByMatiere[$key]=(object)[
                    "matiereId"=>$matiere->ue_id,
                    "etudiantId"=>$etudiantId,

                    "noteFinal"=>$noteF
                ];

            }


        return $noteFinaleBySemestreByMatiere;


}

public static function     getNoteMatiere($matiereId,$etudiant){

        foreach ($etudiant->moyenne as $item){
            if($item->matiereId==$matiereId && $etudiant->etudiant->id==$item->etudiantId){
                return  $item->noteFinal;
            }
        }

}
public static  function  getDecisionBysemestreById($inscriptionId,$countSemestres)
{
   $mgp= DB::table("decision_mgps")->where("inscription_id", "=", $inscriptionId)->sum("mgp");
    $credit= DB::table("decision_mgps")->where("inscription_id", "=", $inscriptionId)->sum('credit');


    return (object)[
        "mgp"=>$mgp,
        "decision"=> $mgp>=2?"Admis":"ECHEC",
        "credit"=>$credit
    ];


}
public static function semestreSession($sessionId){
       return DB::table("sessions")->find($sessionId)->semestre;
}
}


