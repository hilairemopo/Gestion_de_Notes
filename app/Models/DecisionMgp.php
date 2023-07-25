<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecisionMgp extends Model
{
    use HasFactory;
    protected $fillable=[
               'id',
            'etudiant_id',
            'filiere_id',
            'niveau_id',
            'anneacademique_id',
            'session_id',
            'mgp',
            'decision',
            'credit'

    ];

}
