<?php

namespace App\Http\Controllers;

use App\Models\releve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ReLevController extends Controller
{
    public function trait(){
        $annee= DB::table('anneacademiques')->get();
        $semestre=DB::table('sessions')->get();



       return view("pages.releve1",['annee'=>$annee,'semestre'=>$semestre]);
    }


    public function traitForm(Request  $request){


       return Redirect::route("tests",["anneeId"=>$request->annee,"sessionId"=>$request->semestre,"matricule"=>$request->mat]);

    }
    //
}
