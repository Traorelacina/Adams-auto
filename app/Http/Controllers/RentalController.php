<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Rental::create($request->all());
        return redirect()->route('rentals.index')->with('success', 'Réservation créée avec succès.');
    }

    public function update(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->update($request->all());
        return redirect()->route('rentals.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Réservation annulée avec succès.');
    }
}