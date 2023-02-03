<?php

namespace App\services;

use PhpParser\Node\Stmt\Else_;

class NoteService
{

    public static function CalculMention($notesur){

       if($notesur>=80){
           return "A";
       }
       elseif ($notesur<=79 &&  $notesur>=75){
           return "A-";
       }
       elseif ($notesur<=74 &&  $notesur>=70){
           return "B+";
       }
       elseif ($notesur<=69 &&  $notesur>=65){
           return "B-";
       }
       elseif ($notesur<=60 &&  $notesur>=64){
           return "B";
       }
       elseif ($notesur<=59 &&  $notesur>=55){
           return "C+";
       }
       elseif ($notesur<=54 && $notesur>=50){
           return "C";
       }
       elseif ($notesur<=49 && $notesur>=45){
           return "C-";
       }
       elseif ($notesur<=44 && $notesur>=40){
           return "D+";
       }
       elseif ($notesur<=39 && $notesur>=35){
           return "D";
       }
       elseif ($notesur<=34 && $notesur>=30){
           return "E";
       }
       else {
           return "F-";
       }


    }
    public static function Decision($notesur){
        if($notesur>=50){
            return "CA";
        }
        else if($notesur==49.50){
            return  "CANT";
        }
        else{
            return "non capitalise";
        }
    }
    public static function calculMGPAndDecission($notes){
        $sum=0;
        $mgp=0;
        $decission="ECHEC";
        foreach($notes as $note){
            $sum+=$note->participation->notesur;
        }
        $mgp=(($sum/100))/5;

        if($mgp<2){
            $decission="ECHEC";
        }else{
            $decission="ADMIS";
        }



       return (object)[
        'mgp'=>$mgp,
        "decision"=>$decission
       ];
    }
    public function creditCapitalise($notes){

        $cca=0;
        $totalCredit=0;
        $pourcentage=0;

        foreach($notes as $note){
            $totalCredit+=$note->matiere->nbrecredit;
        if($note->participation->notesur>=50){

               $cca+=$note->matiere->nbrecredit;
               $pourcentage= round((($cca/$totalCredit)*100));
            }

    }
    return (object)[
        'cca'=>$cca,
        'totalCredit'=>$totalCredit,
        'pourcentage'=>$pourcentage
    ];

    }

}
