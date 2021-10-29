<?php

use App\Http\Controllers\ApprenantController;
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
})->name("index");

Route::post("/accueil", [ConnexionController::class, "connecter"])->name("connexion");

Route::get("/apprenant", [ApprenantController::class, "lister"])->name("accueil");

Route::get("/apprenant/ajout", [ApprenantController::class, "ajouter"])->name("ajoutApprenant");

Route::post("/apprenant/ajout", [ApprenantController::class, "inserer"])->name("traitement.ajout");

Route::get("/apprenant/modifApprenant/{apprenant}", [ApprenantController::class, "editer"])->name("modifApprenant");

Route::get("/apprenant/{apprenant}", [ApprenantController::class, "supprimer"])->name("apprenantSupprimer");

Route::post("/apprenant/modifApprenant/{apprenant}", [ApprenantController::class, "modifier"])->name("traitement.modif");
