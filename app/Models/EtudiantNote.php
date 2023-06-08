<?php

namespace App\Models;

use App\services\NoteService;
use GuzzleHttp\Promise\Is;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class EtudiantNote extends Model
{
    use HasFactory;
    protected $table="etudiants";
    protected $appends=["appends"];
    protected $fillable=['id',
            'matricule',
            'nom',
            'prenom',
            'datenaiss',
            'lieu',
            'sex'];

    public function inscriptions(){
        return $this->hasMany(Inscription::class,'etudiant_id','id');
    }

    public function getAppendsAttribute(){
        $inscription=$this->IsInscrit($this->id);
       return [
           "inscription"=>$inscription,
       ];
    }

    public  function IsInscrit($id){
        return $this->inscriptions()
            ->where("anneacademique_id","=",Anneacademique::sessionEncours())
            ->where("etudiant_id","=",$id)->first();
    }
}
