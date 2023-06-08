<?php

namespace App\Http\Controllers;

use App\Models\Anneacademique;
use App\Models\Etudiant;
use App\Models\EtudiantInscription;
use App\Models\EtudiantNote;
use App\Models\Evaluation;
use App\Models\Inscription;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class forminsertController extends Controller
{
    //
    public function inser(){

    return view("pages.relai");
    }
    public function create(Request $request){
        $students =EtudiantInscription::all();
        $etudiant['matricule']=$request->matricule;
        $etudiant['nom']=$request->nom;
        $etudiant['prenom']=$request->prenom;
        $etudiant['datenaiss']=$request->datenaiss;
        $etudiant['lieu']=$request->lieu;
        $etudiant['sex']=$request->sex;
        Etudiant::create($etudiant);
        return view('pages.insertion',["students"=>$students]);
    }
    public function inscription(){
    $students =EtudiantInscription::all();


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

        $paiement=new Paiement();


        $inscription['anneacademique_id']=$request->anneacademique_id;
        $inscription['filiere_id']=$request->filiere_id;
        $inscription['niveau_id']=$request->niveau_id;
        $inscription['etudiant_id']=$request->etudiant_id;
       $inscription= Inscription::create($inscription);

       $paiement->datepaiement=$request->datepaiement;
        $paiement->numeroderecue=$request->numeroderecue;
        $paiement->RecuePaiement=$request->RecuePaiement;
        $paiement->montant=$request->montant;
        $paiement->Banque=$request->Banque;
        $paiement->inscription_id=$inscription->id;

         $paiement->save();
        return "envoyer avec succes";
    }
    public function insernote(){

        $anneacademiques = Anneacademique::sessionEncours();
        $evaluations=Evaluation::all();
        return view('pages.formnotes',['anneacademiques'=>$anneacademiques,"evaluations"=>$evaluations]);
    }


    public function noteEtudiant(Request $request){

        $matricule=$request->get("mat");
        $etudiant=EtudiantNote::where("matricule","=",$matricule)->first();

        dd($etudiant["appends"]["inscription"]);




    }
}

