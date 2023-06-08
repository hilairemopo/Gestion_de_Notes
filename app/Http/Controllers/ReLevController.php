<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\releve;
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
        $tab=[];
        $tab['filiere']=$request->input("filiere");
        $tab['niveau']=$request->input("niveau");
        $tab['annee']=$request->input("annee");
        $tab['semestre']=$request->input("semestre");
        $etudiantIds =DB::table("inscriptions")->where(['filiere_id'=>$tab['filiere'],'niveau_id'=>$tab['niveau']])->pluck("etudiant_id");
        $etudiants=DB::table("etudiants")->whereIn('id',$etudiantIds)->pluck("matricule");

        $etudiantsByReleve=[];

        foreach ($etudiants as $key=>$etudiant){
            $etudiantsByReleve[$key]=Etudiant::getReleve( $tab['annee'],$tab['semestre'],$etudiant);
        }



        return view("pages.ReleveColection",['etudiants'=>$etudiantsByReleve]);


    }
    //
}
