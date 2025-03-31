<!-- Component: cars-for-rent.blade.php -->
<div class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-gray-100 flex items-center">
            <span class="w-1 h-8 bg-blue-700 rounded mr-3 shadow-md shadow-blue-300"></span>
            Nos voitures en location
        </h2>
        
        <!-- Filtres -->
        <div class="bg-white rounded-lg shadow-md p-5 mb-6 transform transition-all hover:shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="marque-location" class="block text-sm font-medium text-gray-600 mb-1">Marque</label>
                    <select id="marque-location" class="w-full border border-gray-200 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        <option value="">Toutes les marques</option>
                        @foreach($cars->pluck('marque')->unique() as $marque)
                            <option value="{{ $marque }}">{{ $marque }}</option>
                        @endforeach
                    </select>
                </div>
               
                
            </div>
        </div>
        
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cars as $car)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all hover:shadow-xl hover:transform hover:scale-[1.02]">
                        <!-- Badge location -->
                        <div class="relative group">
                            @if(!empty($car->photos) && count($car->photos) > 0)
                                <img src="{{ asset('storage/' . $car->photos[0]) }}" alt="{{ $car->marque }} {{ $car->modele }}" class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105">
                            @else
                                <div class="w-full h-56 bg-gray-100 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="absolute top-4 right-4 bg-blue-600 text-white text-sm font-bold px-3 py-1 rounded-full shadow-lg transform transition-all duration-300 group-hover:scale-110">
                                Location
                            </span>
                        </div>
                        
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $car->marque }} {{ $car->modele }}</h3>
                            
                            <div class="text-2xl font-bold text-blue-600 mb-4 flex items-center">
                                {{ number_format($car->prix, 0, ',', ' ') }} FCFA
                                <span class="text-sm text-gray-500 font-normal ml-1">/jour</span>
                            </div>
                            
                            <div class="grid grid-cols-3 gap-2 mb-4">
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-md border border-gray-100">
                                    <span class="text-xs text-gray-500">Année</span>
                                    <span class="font-medium text-gray-800">{{ $car->annee }}</span>
                                </div>
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-md border border-gray-100">
                                    <span class="text-xs text-gray-500">Carburant</span>
                                    <span class="font-medium text-gray-800">{{ $car->carburant }}</span>
                                </div>
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-md border border-gray-100">
                                    <span class="text-xs text-gray-500">Kilométrage</span>
                                    <span class="font-medium text-gray-800">{{ number_format($car->kilometrage, 0, ',', ' ') }}</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-4 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($car->description, 100) }}
                            </p>
                            
                            <div class="flex">
                                <a href="{{ route('cars.show', $car->id) }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-4 rounded-md font-medium transition-all flex items-center justify-center">
                                    <span>Voir détails</span>
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Aucune voiture en location disponible</h3>
                <p class="text-gray-500">Veuillez revenir ultérieurement ou contacter notre service client pour plus d'informations.</p>
            </div>
        @endif
    </div>
</div>