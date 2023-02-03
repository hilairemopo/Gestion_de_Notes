<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uedansFiliere extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
           'niveau_id',

           'session_id',


            'filiere_id',

            'ue_id',
    ];
}
