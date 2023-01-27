<?php

namespace App\Models;

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


    public  static function getReleve( $annneeAcademic,$matricule){

        $etudiant=Etudiant::where('matricule','=',$matricule)->first();
        $inscription=Inscription::where('etudiant_id','=',$etudiant->id)->where("anneacademique_id",'=',$annneeAcademic)->first();
        $participation = DB::table('participations')->get();

        return ['etudiant'=>$etudiant,'inscription'=>$inscription,'notes'=>$participation];


}
}
