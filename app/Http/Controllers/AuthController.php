<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\utilisateur;

class AuthController extends Controller
{
    // Afficher la page de connexion
    public function showLogin()
    {
        return view('connexion.connexion'); // Assurez-vous que connexion.blade.php existe dans resources/views/
    }

    public function traitement()
    {

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = Auth::attempt([
            'email' => request('email'), 
            'password' => request('password'), 
        ]);

        if ($resultat) {
            return redirect('/accueil_utilisateur');
        }
        
        return back()->withErrors(['email' => 'Les identifiants sont incorrects.'])->withInput();

    }
}
