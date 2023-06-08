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

Route::get('/certificat/{anneeId}/{matricule}',[\App\Http\Controllers\CertificatController::class,'certif'])->name('certif');

Route::post('/scolarite',[\App\Http\Controllers\CertificatController::class,'school']);

Route::get('/releve
', function () {
    return view('pages.releve');
});
Route::get('/certificat
', function () {
    return view('pages.cerscolarite');
});

Route::get('/scoollcertificate',[\App\Http\Controllers\CertificatController::class,'certificate']);
Route::get('/Pvrlist',[\App\Http\Controllers\ PvrController::class,'certificate']);
Route::get('/AdmissionList',[\App\Http\Controllers\AdmissionListController::class,'certificate']);
Route::get('/AchievementList',[\App\Http\Controllers\AchievmentController::class,'certificate']);



Route::get('/releve1',[\App\Http\Controllers\ReLevController::class,'trait']);
Route::get('/releve3',[\App\Http\Controllers\ReLevController::class,'traite']);

Route::get('/form_releve',[\App\Http\Controllers\ReLevController::class,'traitForm']);

Route::get('/ReleveCollection',[\App\Http\Controllers\ReleveNoteController::class,'collectionreleve']);

Route::get('/filiereReleve',[\App\Http\Controllers\ReLevController::class,'specialteR']);

Route::get('/formulaire',[\App\Http\Controllers\forminsertController::class,'inser']);
Route::post('/create',[\App\Http\Controllers\forminsertController::class,'create']);

Route::get('/insertion',[\App\Http\Controllers\forminsertController::class,'inscription']);
Route::get('/form_inscription/{id}',[\App\Http\Controllers\forminsertController::class,'traiteForm']);
//Route::get('/formInsertion',[\App\Http\Controllers\forminsertController::class,'traiteForm']);
Route::post('/created',[\App\Http\Controllers\forminsertController::class,'crea']);
Route::get('/InsertionNotes',[\App\Http\Controllers\forminsertController::class,'insernote']);

Route::get('/java',[\App\Http\Controllers\Jasper::class,"compileExample"]);
Route::post('/insert_note_etudiant',[\App\Http\Controllers\forminsertController::class,'noteEtudiant']);
