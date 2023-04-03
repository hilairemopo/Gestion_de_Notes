<?php

use App\Http\Controllers\ReleveNoteController;
use Illuminate\Support\Facades\Route;
use PHPJasper\PHPJasper;


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
Route::get('/certificat
', function () {
    return view('pages.cerscolarite');
});


Route::get('/releve1',[\App\Http\Controllers\ReLevController::class,'trait']);

Route::get('/form_releve',[\App\Http\Controllers\ReLevController::class,'traitForm']);

Route::get('/formulaire',[\App\Http\Controllers\forminsertController::class,'inser']);
Route::post('/create',[\App\Http\Controllers\forminsertController::class,'create']);

Route::get('/insertion',[\App\Http\Controllers\forminsertController::class,'inscription']);
Route::get('/form_inscription/{id}',[\App\Http\Controllers\forminsertController::class,'traiteForm']);
//Route::get('/formInsertion',[\App\Http\Controllers\forminsertController::class,'traiteForm']);
Route::post('/created',[\App\Http\Controllers\forminsertController::class,'crea']);


Route::get('/java', function () {

    $input = __DIR__ . '/vendor/geekcom/phpjasper/examples/hello_world.jasper';
    $output = __DIR__ . '/vendor/geekcom/phpjasper/examples';
    $options = [
        'format' => ['pdf', 'rtf']
    ];

    $jasper = new PHPJasper;

    $jasper->process(
        $input,
        $output,
        $options
    )->execute();
});
