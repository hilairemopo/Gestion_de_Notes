<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\EtudiantInscription;
use App\Models\Inscription;
use App\Models\NoteEtudiant;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $students =EtudiantInscription::all();

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
        return view('pages.insertion',["students"=>$students]);
    }
    public function insernote(){

        $annee= DB::table('anneacademiques')->get();
        $filiere=DB::table('filieres')->get();
        $niveau=DB::table('niveaux')->get();


        return view('pages.formnotes',['anneacademiques'=>$annee,"filiere"=>$filiere,"niveau"=>$niveau]);
    }


    public function noteEtudiant(Request $request){

        $matricule=$request->get("matricule");
        $filiere=$request->get("filiere");

        $niveau=$request->get('niveau');
        $annee=$request->get('anneacademiques');

        $ueDansFiliere=DB::table("uedans_filieres")->where("filiere_id","=",$filiere)->pluck("ue_id");
        $matieres=DB::table("ues")->whereIn("id",$ueDansFiliere)->get();

            //$matiere=DB::table("ues")->whereIn("id","=",$ue)->pluck("codeue");


        $etudiantID=DB::table('etudiants')->where('matricule',"=",$matricule)->pluck("id")->first();
        $inscriptions=Inscription::where('etudiant_id',"=",$etudiantID)->first();


       return view("pages.EtudiantNotes",["matieres"=>$matieres,"matricule"=>$inscriptions->id,"filiere"=>$filiere,"niveau"=>$niveau]);
    }


    public function saveNote(Request  $request){

        $matiereFiliereId=DB::table("uedans_filieres")->where("filiere_id","=",$request->filiere)->where("ue_id","=",$request->matiere)->first()->id;


        $noteExist=NoteEtudiant::where(["inscription_id"=>$request->inscription,"uedans_filieres_id"=>$matiereFiliereId])->first();
        if($noteExist){


            $noteExist["inscription_id"]=$request->inscription;
            $noteExist["uedans_filieres_id"]=$matiereFiliereId;
            if($request->compo=="cc"){
                $noteExist["notecc"]=$request->note;
            }else
            if($request->compo=="tp"){
                $noteExist["notetp"]=$request->note;
            }
            if($request->compo=="examen"){
                $noteExist["notesn"]=$request->note;
            }else

            if($request->compo=="ratrappage"){
                $noteExist["notesRattrapages"]=$request->note;
            }


            $noteExist->save();
        }else{

            $note=new NoteEtudiant();

            $note["inscription_id"]=$request->inscription;
            if($request->compo=="cc"){
                $note["notecc"]=$request->note;
            }
            if($request->compo=="tp"){
                $note["notetp"]=$request->note;
            }
            if($request->compo=="examen"){
                $note["notesn"]=$request->note;
            }

            if($request->compo=="ratrappage"){
                $note["notesRattrapages"]=$request->note;
            }
            $note["uedans_filieres_id"]=$matiereFiliereId;
            $note->save();
        }



    }



}
