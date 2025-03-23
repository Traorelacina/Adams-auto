<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'sujet' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create($request->all());
        return redirect()->route('contact')->with('success', 'Message envoyé avec succès.');
    }
}