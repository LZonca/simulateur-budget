<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function simulateur(){
        return view('simulateur');
    }

    public function resultats()
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::check()) {
            // Utilisateur authentifié, récupérer les résultats
            $simulations = Auth::user()->simulations;
            return view('resultats', compact('simulations'));

        }
        // else {
        //     // Utilisateur non authentifié, rediriger vers la page de connexion
        //     return redirect()->route('login')->with('status', 'Veuillez vous connecter pour accéder aux résultats.');
        // }
    }

    public function pannel(){
        return view('pannel');
    }

    public function superAdminPannel(){
        $adminRole = Role::where('name', 'admin')->first();
        $users = User::all();
        return view('super-admin-pannel', compact('users'));
    }
}
