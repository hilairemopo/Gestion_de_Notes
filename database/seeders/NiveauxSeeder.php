<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NiveauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'L1']);

        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'L2']);

        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'L3']);

        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'M1']);

        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'M2']);

        $faker= Faker::create();
        DB::table('niveaux')->insert([
            'niveau'=>'DOCTORAT']);

        //
    }
}
