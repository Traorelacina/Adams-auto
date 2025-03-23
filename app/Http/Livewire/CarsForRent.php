<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarsForRent extends Component
{
    public function render()
    {
        $cars = Car::where('type', 'location')->where('statut', 'disponible')->get();
        return view('livewire.cars-for-rent', compact('cars'));
    }
}