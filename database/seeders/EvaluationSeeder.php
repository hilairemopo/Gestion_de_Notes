<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$faker=Faker::create();
        DB::table('evaluations')->insert([
            'dateExam'=>'25/06/2023',
            'typeExam'=>'CC',
            'session_id'=>1,]);
        $faker=Faker::create();
        DB::table('evaluations')->insert([
            'dateExam'=>'21/05/2022',
            'typeExam'=>'TP',
            'session_id'=>2,]);
        $faker=Faker::create();
        DB::table('evaluations')->insert([
            'dateExam'=>'22/05/2023',
            'typeExam'=>'EXAMEN',
            'session_id'=>2,]);
        //
    }
}
