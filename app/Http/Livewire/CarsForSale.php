<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarsForSale extends Component
{
    public function render()
    {
        $cars = Car::where('type', 'vente')->where('statut', 'disponible')->get();
        return view('livewire.cars-for-sale', compact('cars'));
    }
}