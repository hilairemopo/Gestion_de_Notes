<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReleveNoteController extends Controller
{
    public function tests(Request  $request)
    {
         $request->sessionId;

    $data=Etudiant::getReleve($request->anneeId,$request->sessionId,$request->matricule);

      //dd($notes->matiere->nbrecredit);

        return view('test',['data'=>$data]);
    }
}
