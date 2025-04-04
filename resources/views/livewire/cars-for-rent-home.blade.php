<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 mt-6">
                @foreach($cars->take(5) as $car)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 flex flex-col h-full">
                        <div class="relative h-48 overflow-hidden">
                            @if(!empty($car->photos) && count($car->photos) > 0)
                                <img src="{{ asset('storage/' . $car->photos[0]) }}" 
                                     alt="{{ $car->marque }} {{ $car->modele }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            @else
                                <div class="h-full bg-gray-100 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="absolute top-4 right-4 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-gradient-to-r from-blue-500 to-indigo-500">
                                Location
                            </span>
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $car->marque }} {{ $car->modele }}</h3>
                            
                            <div class="text-2xl font-bold text-blue-500 mb-1">
                                {{ number_format($car->prix, 0, ',', ' ') }} FCFA
                                <span class="text-xs text-gray-500 font-normal">/jour</span>
                            </div>
                            
                            <div class="mt-auto flex justify-between items-center">
                                <div class="text-sm text-gray-600">
                                    Année: {{ $car->annee }}
                                </div>
                                <a href="{{ route('cars.show', $car->id) }}" 
                                   class="px-4 py-2 bg-sky-500/75">
                                    Détails
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 bg-gray-100 rounded-xl mt-8">
                <h3 class="text-xl text-gray-600 font-medium">Aucune voiture en location disponible</h3>
            </div>
        @endif
    </div>
</div>