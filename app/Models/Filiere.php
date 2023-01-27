<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected  $appends =['departement'];
    protected $fillable=[
        'id',
            'intitulefiliere',
            'descriptionfiliere',
            'departement_id'
    ];
    public function departement(){
        return $this->belongsTo(departement::class);
    }
    public function getDepartementAttribute(){
        return $this->departement()->first();
    }
}
