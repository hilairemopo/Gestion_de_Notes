<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchievmentController extends Controller
{
    //
    public function Attestationform(){

        $annee= DB::table('anneacademiques')->get();
        $filiere=DB::table('filieres')->get();
        $niveau=DB::table('niveaux')->get();
        $etudiant=DB::table('etudiants')->get();

        return view('pages.Attestation',['année'=>$annee,'niveau'=>$niveau,'filiere'=>$filiere,'etudiant'=>$etudiant]);
}
public function Attestationfile(Request $request){
        $matricule=$request->get("mat");
        $filiere=$request->get('filiere_id');
        $niveau=$request->get('niveau_id');
        $annee=$request->get('anneacademique_id');


        $etudiantId=DB::table("etudiants")->where('matricule',"=",$matricule)->first()->id;
        $inscription=Inscription::where("etudiant_id","=",$etudiantId)->first();
    $sumgp=DB::table("decision_mgps")->where("inscription_id","=",$etudiantId)->sum('mgp');


    //  dd($etudiantId);
return view('pages.AttestationFile',['inscription'=>$inscription,'decision'=>$sumgp]);
}


}
