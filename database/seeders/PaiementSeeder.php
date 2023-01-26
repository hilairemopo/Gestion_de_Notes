<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$faker= Faker::create();
        $inscription =  DB::table('inscriptions')->get();
        foreach ($inscription as  $key=>$item  ){

            DB::table('paiements')->insert([
                'datePaiement'=>Date::now(),
                'numerodeRecue'=>'0000'+$key,
                'montant'=>50000,
                'RecuePaiement'=>'6548'+$key,
                'Banque'=>'UBA',
                'inscription_id'=>$item->id
        ]);
        }
    }


        //

}
