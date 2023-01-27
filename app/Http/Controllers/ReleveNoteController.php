<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReleveNoteController extends Controller
{
    public function tests(Request  $request)
    {

        $data=Etudiant::getReleve($request->anneeId,$request->matricule);


        return view('test',['data'=>$data]);
    }
}
