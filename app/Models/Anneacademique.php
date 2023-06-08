<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Anneacademique extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'annee',
        'encours'
    ];

    public static  function sessionEncours(){
       return DB::table("anneacademiques")->where("encours","=",true)->first()->id;
    }
}
