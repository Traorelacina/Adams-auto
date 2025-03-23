<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annee' => 'required|integer',
            'prix' => 'required|numeric',
            'carburant' => 'required',
            'kilometrage' => 'required|integer',
            'description' => 'required',
            'photos' => 'nullable|array',
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Voiture ajoutée avec succès.');
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Voiture mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Voiture supprimée avec succès.');
    }
}