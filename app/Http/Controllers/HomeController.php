<?php

namespace App\Http\Controllers;

use App\Models\PageView;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Enregistre la vue de la page d'accueil
        PageView::track('/');
        
        return view('welcome');
    }
}