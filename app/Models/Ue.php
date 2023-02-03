<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
