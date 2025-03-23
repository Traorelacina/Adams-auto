<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required',
            'logo' => 'nullable|image',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'google_maps_iframe' => 'nullable',
        ]);

        $settings = Setting::firstOrNew();
        $settings->update($request->all());
        return redirect()->route('settings.index')->with('success', 'Paramètres mis à jour avec succès.');
    }
}