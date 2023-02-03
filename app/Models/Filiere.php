<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected  $appends =['departement','specialite','ues'];
    protected $fillable=[
        'id',
            'intitulefiliere',
            'descriptionfiliere',
            'departement_id',
            'specialite_id'
    ];
    public function departement(){
        return $this->belongsTo(departement::class);
    }
    public function getDepartementAttribute(){
        return $this->departement()->first();
    }
    public function specialite(){
        return $this->belongsTo(specialite::class);
    }
    public function getSpecialiteAttribute(){
        return $this->specialite()->first();
    }
    public function ues(){
        return $this->belongsToMany(Ue::class,"uedans_filieres","filiere_id",'ue_id');
    }
    public  function getUesAttribute(){
        return $this->ues()->get();
    }
}
