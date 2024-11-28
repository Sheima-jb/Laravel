<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Home Page';
        return view('home', compact('title'));
    }
    public function about()
    {
        $title = 'À propos de nous'; // Définissez la variable $title
        return view('about'); // Passez la variable à la vue
    }
    public function services()
    {
        $title = 'Our Services';
        $services = ['Account Creation', 'Deposit', 'Withdrawal', 'Money Transfer'];
        return view('services', compact('title', 'services'));
    }
}
