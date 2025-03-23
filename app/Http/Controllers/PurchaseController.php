<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
        ]);

        Purchase::create($request->all());
        return redirect()->route('purchases.index')->with('success', 'Demande d\'achat soumise avec succès.');
    }

    public function update(Request $request, $id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());
        return redirect()->route('purchases.index')->with('success', 'Demande d\'achat mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success', 'Demande d\'achat supprimée avec succès.');
    }
}