<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CertificatController extends Controller
{
    public function certif(Request $request){

        $Info=Inscription::certificat($request->anneeId,$request->matricule);


        return view('pages.cerscolarite',['info'=>$Info]);
    }
    public function certificate(){
        $annee = DB::table('anneacademiques')->get();
        return view('pages.Schollertificate',[
            'annee'=>$annee
        ]);
    }
    public function school(Request $request){
        return Redirect::Route("certif",['anneeId'=>$request->annee,'matricule'=>$request->mat]);
    }
}
