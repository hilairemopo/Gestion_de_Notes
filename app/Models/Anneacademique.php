<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneacademique extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'annee',
        'encours'
    ];
}
