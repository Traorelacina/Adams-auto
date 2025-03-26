<div class="py-4">
    <div class="container mx-auto px-4">
        @if($cars->count() > 0)
            <div class="car-grid">
                @foreach($cars->take(5) as $car)
                    <div class="car-card">
                        <div class="car-card__image relative">
                            @if(!empty($car->photos) && count($car->photos) > 0)
                                <img src="{{ asset('storage/' . $car->photos[0]) }}" 
                                     alt="{{ $car->marque }} {{ $car->modele }}" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="car-placeholder car-card__image flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="car-card__badge car-card__badge--sale">
                                À vendre
                            </span>
                        </div>
                        
                        <div class="car-card__content">
                            <h3 class="car-card__title">{{ $car->marque }} {{ $car->modele }}</h3>
                            
                            <div class="car-card__price car-card__price--sale">
                                {{ number_format($car->prix, 0, ',', ' ') }} FCFA
                            </div>
                            
                            <div class="car-card__details">
                                <div class="car-card__year">
                                    <span>Année: {{ $car->annee }}</span>
                                </div>
                                <a href="{{ route('cars.show', $car->id) }}" 
                                   class="car-card__btn car-card__btn--sale">
                                    Détails
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-cars-message">
                <h3>Aucune voiture à vendre disponible</h3>
            </div>
        @endif
    </div>
</div>