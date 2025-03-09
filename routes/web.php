<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil.accueil');
})->name('page_accueil');

Route::get('/connexion', function () {
    return view('connexion.connexion');
})->name('page_connexion');

Route::get('/inscription', function () {
    return view('inscription.inscription');
})->name('page_inscription');

Route::get('/root', function () {
    return view('root.root');
})->name('page_root');

Route::get('/confirmation_inscription', function () {
    return view('confirmation.confirmation_inscription');
})->name('page_confirmation_inscription');

Route::get('/place_parking', function () {
    return view('place_parking.place_parking');
})->name('page_place_parking');

Route::get('/accueil_utilisateur', function () {
    return view('accueil_utilisateur.accueil_utilisateur');
})->middleware('auth')->name('accueil_utilisateur');



Route::post('/inscription', function (Request $request) {



    $utilisateur = utilisateur::create([

        'Prénom'  => $request->Prénom,
        'Nom'     => $request->Nom,
        'Email'   => $request->Email,
        'password'=> bcrypt($request->password),
    ]);

    return view('confirmation.confirmation_inscription');

});