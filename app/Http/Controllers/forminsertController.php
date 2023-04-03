<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class forminsertController extends Controller
{
    //
    public function inser(){

    return view("pages.relai");
    }
    public function create(Request $request){

        $etudiant['matricule']=$request->matricule;
        $etudiant['nom']=$request->nom;
        $etudiant['prenom']=$request->prenom;
        $etudiant['datenaiss']=$request->datenaiss;
        $etudiant['lieu']=$request->lieu;
        $etudiant['sex']=$request->sex;
        Etudiant::create($etudiant);
        return "envoyer avec succes";
    }
    public function inscription(){
    $students =DB::table('etudiants')->get();
        return view('pages.insertion',["students"=>$students]);
    }
    public function teste(){
        return view('pages.forme');
    }
    public function traiteForm(Request $request){
        $annee= DB::table('anneacademiques')->get();
        $filiere=DB::table('filieres')->get();
        $niveau=DB::table('niveaux')->get();
        $etudiant=DB::table('etudiants')->where('id','=',$request->id)->first();


        $idMatiere=DB::table("uedans_filieres")->where('filiere_id','=',2)->pluck("ue_id");
        $matieres=DB::table("ues")->whereIn("id",$idMatiere)->get();

        return view('pages.forme',['année'=>$annee,'niveau'=>$niveau,'filiere'=>$filiere,'etudiant'=>$etudiant]);
    }
    public function crea(Request $request){
        $inscription['anneacademique_id']=$request->anneacademique_id;
        $inscription['filiere_id']=$request->filiere_id;
        $inscription['niveau_id']=$request->niveau_id;
        $inscription['etudiant_id']=$request->etudiant_id;
        Inscription::create($inscription);
        return "envoyer avec succes";
    }
}

