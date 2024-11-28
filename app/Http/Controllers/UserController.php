<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Méthode pour afficher le formulaire d'inscription
    public function create()
    {
        return view('auth.register');  // Utiliser une vue d'inscription
    }

    // Méthode pour enregistrer un nouvel utilisateur
    public function store(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|in:user,admin',  // Validation du rôle
    ]);

    // Création de l'utilisateur avec un rôle attribué
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role' => utilisateur,  // Attribution du rôle
    ]);

    // Redirection ou autre action après l'enregistrement
    return redirect()->route('login')->with('status', 'Compte créé avec succès');
}


    // Méthode pour afficher la liste des utilisateurs (optionnel)
    public function index()
    {
        $users = User::all();  // Récupère tous les utilisateurs
        return view('users.index', compact('users'));  // Vue qui liste les utilisateurs
    }
}
