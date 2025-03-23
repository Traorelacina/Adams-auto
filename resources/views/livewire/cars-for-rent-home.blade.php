<!-- resources/views/livewire/cars-for-rent-home.blade.php -->
<div class="py-4">
    <div class="container mx-auto px-4">
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
                @foreach($cars->take(5) as $car)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <!-- Badge location -->
                        <div class="relative">
                            @if(!empty($car->photos) && count($car->photos) > 0)
                                <img src="{{ asset('storage/' . $car->photos[0]) }}" alt="{{ $car->marque }} {{ $car->modele }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs font-semibold px-2 py-1 rounded-full">
                                Location
                            </span>
                        </div>
                        
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1 line-clamp-1">{{ $car->marque }} {{ $car->modele }}</h3>
                            
                            <div class="text-xl font-bold text-blue-600 mb-2">
                                {{ number_format($car->prix, 0, ',', ' ') }} FCFA
                                <span class="text-xs text-gray-500 font-normal">/jour</span>
                            </div>
                            
                            <div class="flex justify-between mb-2">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-500 mr-1">Année:</span>
                                    <span class="font-medium text-sm">{{ $car->annee }}</span>
                                </div>
                                <a href="{{ route('cars.show', $car->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium py-1 px-3 rounded-lg transition-colors duration-300">
                                    Détails
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                <h3 class="text-lg font-medium text-gray-900">Aucune voiture en location disponible</h3>
            </div>
        @endif
    </div>
</div>