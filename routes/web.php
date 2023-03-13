<?php

use App\Http\Controllers\ReleveNoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test',function(){
    return view('test');
});*/
Route::get('/test/{anneeId}/{sessionId}/{matricule}',[ReleveNoteController::class,'tests'])->name("tests");

Route::get('/releve
', function () {
    return view('pages.releve');
});



Route::get('/releve1',[\App\Http\Controllers\ReLevController::class,'trait']);

Route::get('/form_releve',[\App\Http\Controllers\ReLevController::class,'traitForm']);

