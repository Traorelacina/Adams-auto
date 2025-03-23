<?php
// app/Http/Livewire/CarsForSaleHome.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarsForSaleHome extends Component
{
    public function render()
    {
        // Récupérer seulement les 5 voitures à vendre les plus récentes
        $cars = Car::where('type', 'vente')
                    ->latest('created_at')
                    ->take(5)
                    ->get();
                    
        return view('livewire.cars-for-sale-home', [
            'cars' => $cars
        ]);
    }
}
