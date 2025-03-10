<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Affiche la page de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gestion de la connexion
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard'); // Redirige vers le tableau de bord
        }

        return back()->with('error', 'Email ou mot de passe incorrect.');
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
