<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inscription extends Model
{
    use HasFactory;
    protected $appends=['paiement','niveau','filiere','anneAcademique','etudiant'];

    protected $fillable = [
        'id',
            'anneacademique_id',
            'filiere_id',
            'niveau_id',
            'etudiant_id',
    ];

    public function paiement(){
        return $this->belongsTo(Paiement::class);
    }
    public function anneAcademique(){
        return $this->belongsTo(Anneacademique::class,'anneacademique_id');
    }
    public function niveau(){
        return $this->belongsTo(Niveau::class);
    }
    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }

    public function getPaiementAttribute(){
        return $this->paiement()->first();
    }
    public function getNiveauAttribute(){
        return $this->niveau()->first();
    }
    public function  getFiliereAttribute(){
        return $this->filiere()->first();
    }
    public function getAnneAcademiqueAttribute(){
        return $this->anneAcademique()->first();
    }
    public function getEtudiantAttribute(){
        return $this->etudiant()->first();
    }

    public static function certificat($anneeId ,$matricule){


        $etudiant= DB:: table('etudiants')->where('matricule' ,'=',$matricule)->first();

        $inscription = DB::table('inscriptions')->where('etudiant_id','=',$etudiant->id)->where("anneacademique_id","=",$anneeId)->first();

        $filiereEtudiant=DB::table('filieres')->find($inscription->filiere_id);
        $niveauEtudiant=DB::table('niveaux')->find($inscription->niveau_id);
        $anneeAcademique=DB::table('anneacademiques')->find($inscription->anneacademique_id);
        $specialitefiliere=DB::table('specialites')->find($filiereEtudiant->specialite_id);




        return['etudiant'=>$etudiant,
                'niveau'=>$niveauEtudiant,
            'filiere'=>$filiereEtudiant,
            "anneeAcademique"=>$anneeAcademique,
            'specialite'=>$specialitefiliere
        ];
    }
}
