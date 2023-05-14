<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OfertaController;

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
})->name('inici');

Route::get('/cv', [CandidatController::class, 'cv'])->name('cv');

Route::get('/gestionarofertes', [EmpresaController::class, 'gestionarofertes'])->name('gestionar');

Route::get('/landincand', [CandidatController::class, 'landincand'])->name('landincand');

Route::get('/landinempresa', [EmpresaController::class, 'landinempresa'])->name('landingEmp');

Route::get('/llistafertes', [OfertaController::class, 'llistafertes'])->name('llistafertes');

Route::get('/ofertes', [OfertaController::class, 'ofertes'])->name('ofertes');

Route::get('/ofertescandidats', [CandidatController::class, 'ofertescand'])->name('ofertescand');

Route::get('/perfilemp', [EmpresaController::class, 'perfilemp'])->name('perfilemp');

Route::get('/publicar', [EmpresaController::class, 'publicar'])->name('publicar');


/**proba per esborrar després */

Route::get('saludo/{nombre?}', function($nombre = "Invitado") {
    return "Hola, " . $nombre;
    })->name('prova1') ;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
