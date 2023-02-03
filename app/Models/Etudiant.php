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


            $participation=DB::table("participations")->where("ue_id","=",$ue->ue_id)->where("etudiant_id","=",$etudiant->id)->first();
            $m=DB::table("ues")->where("id","=",$ue->ue_id)->first();
            $notes[$key]=(object)[
                "ue"=>$ue,
                "matiere"=>$m,
                "participation"=>$participation,
                "mention"=>NoteService::CalculMention($participation->notesur),
                "decision"=>NoteService::Decision($participation->notesur)
            ];

            

        }

        return [
            'etudiant'=>$etudiant,
            'inscription'=>$inscription,
            'notes'=>$notes,'mgp_decision'=>NoteService::calculMGPAndDecission($notes),
            'credit'=>NoteService::creditCapitalise($notes)
    ];


}
}
