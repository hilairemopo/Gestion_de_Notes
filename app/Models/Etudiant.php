<?php

namespace App\Models;

use App\services\NoteService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class Etudiant extends Model
{
    use HasFactory;
    protected $table="etudiants";
    protected $fillable=['id',
            'matricule',
            'nom',
            'prenom',
            'datenaiss',
            'lieu',
            'sex'];

    public function inscriptions(){
        return $this->hasMany(inscription::class,'etudiant_id');
    }


    public  static function getReleve( $annneeAcademic,$session,$matricule){
        $notes=[];
        $etudiant=Etudiant::where('matricule','=',$matricule)->first();
        $inscription=Inscription::where('etudiant_id','=',$etudiant->id)->where("anneacademique_id",'=',$annneeAcademic)->first();
        $ues=DB::table("uedans_filieres")->where(["filiere_id"=>$inscription->filiere->id,"session_id"=>$session])->get();

        foreach ($ues as $key=>$ue){


            $noteE=NoteEtudiant::where("uedans_filieres_id","=",$ue->id)->where("inscription_id","=",$inscription->id)->first();



                $m=DB::table("ues")->where("id","=",$ue->ue_id)->first();
                $notes[$key]=(object)[
                    "ue"=>$ue,
                    "matiere"=>$m,
                    "participation"=>$noteE,
                    "mention"=>NoteService::CalculMention($noteE?$noteE->appends["noteFinale"]:0),
                    "decision"=>NoteService::Decision($noteE?$noteE->appends["noteFinale"]:0),
                ];
            }






        return [
            'etudiant'=>$etudiant,
            'inscription'=>$inscription,
            'notes'=>$notes,
            'mgp_decision'=>NoteService::calculMGPAndDecission($notes),
            'credit'=>NoteService::creditCapitalise($notes)
    ];


}
}
