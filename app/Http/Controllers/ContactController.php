<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrement dans la base de données
        ContactMessage::create([
            'nom' => $validated['nom'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'sujet' => $validated['sujet'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}