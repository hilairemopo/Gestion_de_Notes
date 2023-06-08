<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EtudiantInscription extends Model
{
    protected $table="etudiants";
    protected  $appends=['isInscrit'];
    protected $fillable=[
        'id',
        'matricule',
        'nom',
        'prenom',
        'datenaiss',
        'lieu',
        'sex'];

    public function  getisInscritAttribute(){

        $anneeEnCours=DB::table("anneacademiques")->where("encours","=",true)->first()->id;

        if($anneeEnCours){
            $inscrit=DB::table("inscriptions")->where(["etudiant_id"=>$this->id,"anneacademique_id"=>$anneeEnCours])->first();
            if ($inscrit){
                return true;
            }else{
                return  false;
            }

        }

        return false;
    }
}
