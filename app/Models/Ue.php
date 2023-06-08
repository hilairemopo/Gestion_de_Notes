<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ue extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
            'codeue',
            'intituleue',
            'nbrecredit',
            'typeue',
            'cathegorie'
    ];


    public static function  getAllUseByByNiveauIdByFiliereId($niveauId,$filiereId){
        $idsUes=DB::table("uedans_filieres")->where([
            "niveau_id"=>$niveauId,
            "filiere_id"=>$filiereId
        ])->pluck("ue_id");


    }


}
