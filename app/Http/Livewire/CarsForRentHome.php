<?php

// app/Http/Livewire/CarsForRentHome.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarsForRentHome extends Component
{
    public function render()
    {
        // Récupérer seulement les 5 voitures à louer les plus récentes
        $cars = Car::where('type', 'location')
                    ->latest('created_at')
                    ->take(5)
                    ->get();
                    
        return view('livewire.cars-for-rent-home', [
            'cars' => $cars
        ]);
    }
}