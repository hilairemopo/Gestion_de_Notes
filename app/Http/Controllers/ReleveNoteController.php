<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReleveNoteController extends Controller
{
    public function tests(Request  $request)
    {
        $etudiant=DB::table("inscriptions")->where('matricule','=',$request['matricule'])->first();
        if
        return view('test',['etudiant'=>$etudiant]);
    }
}
