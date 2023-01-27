<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $appends=['paiement','niveau','filiere','anneAcademique'];

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
}
