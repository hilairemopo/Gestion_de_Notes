<?php

namespace App\Http\Controllers;

use App\Models\DecisionMgp;
use App\Models\Etudiant;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ReLevController extends Controller
{
    public function trait(){
        $annee= DB::table('anneacademiques')->get();
        $semestre=DB::table('sessions')->get();



       return view("pages.releve1",['annee'=>$annee,'semestre'=>$semestre]);
    }
    public function traite(){
        $annee= DB::table('anneacademiques')->get();
        $semestre=DB::table('sessions')->get();
        $filieres=DB::table("filieres")->get();
        $niveaux=DB::table("niveaux")->get();



        return view("pages.releve3",['annee'=>$annee,'semestre'=>$semestre,'filieres'=>$filieres,'niveaux'=>$niveaux]);
    }

    public function traitForm(Request  $request){


       return Redirect::route("tests",["anneeId"=>$request->annee,"sessionId"=>$request->semestre,"matricule"=>$request->mat]);

    }


    public function specialteR(Request $request){


        return view("pages.ReleveColection",['etudiants'=>self::calculReleveNoteEtudiant($request)]);


    }

    public static function calculReleveNoteEtudiant(Request $request){
        $tab=[];
        $tab['filiere']=$request->input("filiere");
        $tab['niveau']=$request->input("niveau");
        $tab['annee']=$request->input("annee");
        $tab['semestre']=$request->input("semestre");
        $inscriptions =Inscription::where(['filiere_id'=>$tab['filiere'],'niveau_id'=>$tab['niveau'],'anneacademique_id'=> $tab['annee']])->get();

        $etudiantsByReleve=[];

        foreach ($inscriptions as $key=>$inscription){
            $etudiantsByReleve[$key]=Etudiant::getReleve( $tab['annee'],$tab['semestre'],$inscription->etudiant->matricule);


           $isExistDecision= DB::table("decision_mgps")->where([
                "inscription_id"=>$inscription->id,
                "session_id"=>$tab['semestre'],


                ])->first();

           if($isExistDecision){

               DecisionMgp::where("id","=",$isExistDecision->id)
                   ->update(["decision"=>$etudiantsByReleve[$key]['mgp_decision']->decision,"mgp"=>$etudiantsByReleve[$key]['mgp_decision']->mgp,"credit"=>$etudiantsByReleve[$key]['credit']->cca]);


           }else{
               $decision=new DecisionMgp();

               $decision->inscription_id= $inscription->id;

               $decision->session_id=$tab['semestre'];
               $decision->decision=$etudiantsByReleve[$key]['mgp_decision']->decision;
               $decision->mgp=$etudiantsByReleve[$key]['mgp_decision']->mgp;
             $decision->credit=$etudiantsByReleve[$key]['credit']->cca;
             //  $decision->credit=0;
               $decision->save();
           }


        }

        return $etudiantsByReleve;

    }

    //
}
