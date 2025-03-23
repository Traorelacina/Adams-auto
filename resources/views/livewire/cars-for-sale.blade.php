<!-- resources/views/livewire/cars-for-sale.blade.php -->
<div class="py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Nos voitures à vendre</h1>
        
        <!-- Filtres -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="marque" class="block text-sm font-medium text-gray-700 mb-1">Marque</label>
                    <select id="marque" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200">
                        <option value="">Toutes les marques</option>
                        @foreach($cars->pluck('marque')->unique() as $marque)
                            <option value="{{ $marque }}">{{ $marque }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="annee" class="block text-sm font-medium text-gray-700 mb-1">Année</label>
                    <select id="annee" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200">
                        <option value="">Toutes les années</option>
                        @foreach($cars->pluck('annee')->unique()->sort()->reverse() as $annee)
                            <option value="{{ $annee }}">{{ $annee }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="prix" class="block text-sm font-medium text-gray-700 mb-1">Prix maximum</label>
                    <input type="range" id="prix" min="0" max="10000000" step="500000" class="w-full">
                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                        <span>0 FCFA</span>
                        <span>5M FCFA</span>
                        <span>10M FCFA</span>
                    </div>
                </div>
                <div>
                    <label for="kilometrage" class="block text-sm font-medium text-gray-700 mb-1">Kilométrage max</label>
                    <select id="kilometrage" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200">
                        <option value="">Tous</option>
                        <option value="10000">Moins de 10 000 km</option>
                        <option value="50000">Moins de 50 000 km</option>
                        <option value="100000">Moins de 100 000 km</option>
                        <option value="150000">Moins de 150 000 km</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="flex justify-between items-center mb-6">
            <div class="text-gray-600">
                {{ $cars->count() }} résultat(s) trouvé(s)
            </div>
            <div>
                <select class="border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200">
                    <option value="date-desc">Plus récent</option>
                    <option value="date-asc">Plus ancien</option>
                    <option value="prix-asc">Prix croissant</option>
                    <option value="prix-desc">Prix décroissant</option>
                </select>
            </div>
        </div>
        
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cars as $car)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <!-- Badge vente -->
                        <div class="relative">
                            @if(!empty($car->photos) && count($car->photos) > 0)
                                <img src="{{ asset(path: 'storage/' . $car->photos[0]) }}" alt="{{ $car->marque }} {{ $car->modele }}" class="w-full h-56 object-cover">
                            @else
                                <div class="w-full h-56 bg-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="absolute top-4 right-4 bg-green-600 text-white text-sm font-semibold px-3 py-1 rounded-full">
                                À vendre
                            </span>
                        </div>
                        
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $car->marque }} {{ $car->modele }}</h3>
                            
                            <div class="text-2xl font-bold text-green-600 mb-4">
                                {{ number_format($car->prix, 0, ',', ' ') }} FCFA
                            </div>
                            
                            <div class="grid grid-cols-3 gap-2 mb-4">
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-lg">
                                    <span class="text-xs text-gray-500">Année</span>
                                    <span class="font-medium">{{ $car->annee }}</span>
                                </div>
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-lg">
                                    <span class="text-xs text-gray-500">Carburant</span>
                                    <span class="font-medium">{{ $car->carburant }}</span>
                                </div>
                                <div class="flex flex-col items-center p-2 bg-gray-50 rounded-lg">
                                    <span class="text-xs text-gray-500">Kilométrage</span>
                                    <span class="font-medium">{{ number_format($car->kilometrage, 0, ',', ' ') }}</span>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-4 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($car->description, 100) }}
                            </p>
                            
                            <div class="flex space-x-2">
                                <a href="{{ route('cars.show', $car->id) }}" class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-4 rounded-lg font-medium transition-colors duration-300">
                                    Voir détails
                                </a>
                                <button type="button" class="bg-gray-100 hover:bg-gray-200 text-gray-700 p-2 rounded-lg transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="bg-gray-100 hover:bg-gray-200 text-gray-700 p-2 rounded-lg transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                </button>
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
                <h3 class="text-lg font-medium text-gray-900 mb-2">Aucune voiture à vendre disponible</h3>
                <p class="text-gray-500">Veuillez revenir ultérieurement ou contacter notre service client pour plus d'informations.</p>
            </div>
        @endif
    </div>
</div>