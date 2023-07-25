<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteEtudiant extends Model
{
    use HasFactory;
    protected $table="noteEtudiants";
    protected $appends=['appends'];

    protected $fillable=['id',
            'inscription_id',
           'session_id',
            'notecc',
            'notetp',
            'notesn',
            'notesRattrapages',
        'uedans_filieres_id'
        ];
    public function getAppendsAttribute(){
        return [
            "noteFinale"=>$this->notefinale()?$this->notefinale():0
        ];
    }
    public function notefinale(){
       return $this->notecc+(2*$this->notetp)+(2*$this->notesn);
    }

}
