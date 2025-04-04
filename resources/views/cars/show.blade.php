<x-app-layout>
    <!-- Car Detail Page -->
    <div class="car-detail-container">
       
        
        <!-- Car Detail Card -->
        <div class="car-detail">
            <!-- Car Image Gallery -->
            <div class="car-image-container">
                <!-- Main image slider -->
                <div class="main-image-slider">
                    @foreach($car->photos as $index => $photo)
                        <div class="slider-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $photo) }}" alt="{{ $car->marque }} {{ $car->modele }} - Photo {{ $index + 1 }}" />
                        </div>
                    @endforeach
                    
                    <!-- Navigation arrows -->
                    <div class="slider-nav">
                        <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                        <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    
                    <!-- Dots navigation -->
                    <div class="slider-control-dots">
                        @foreach($car->photos as $index => $photo)
                            <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Thumbnails navigation -->
                <div class="image-thumbnails">
                    @foreach($car->photos as $index => $photo)
                        <div class="thumbnail {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                            <img src="{{ asset('storage/' . $photo) }}" alt="Miniature {{ $index + 1 }}" />
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Car Info -->
            <div class="car-info-container">
                <div class="car-header">
                    <h1 class="car-title">{{ $car->marque }} {{ $car->modele }}</h1>
                    <div class="car-badge {{ $car->type === 'vente' ? 'for-sale' : 'for-rent' }}">
                        {{ $car->type === 'vente' ? 'À vendre' : 'À louer' }}
                    </div>
                </div>
                
                <div class="car-subtitle">
                    <span class="reference">Référence: #{{ $car->id }}</span>
                    <span class="status {{ strtolower($car->statut) }}">{{ $car->statut ?? 'Disponible' }}</span>
                </div>
                
                <div class="car-price">
                    <span class="price">{{ number_format($car->prix, 0, ',', ' ') }} FCFA</span>
                    @if($car->type === 'location')
                        <span class="price-label">/ par jour</span>
                    @endif
                </div>
                
                <!-- Highlight Features -->
                <div class="car-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>{{ $car->annee ?? '2023' }}</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>{{ number_format($car->kilometrage, 0, ',', ' ') ?? '15 000' }} km</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-gas-pump"></i>
                        <span>{{ $car->carburant ?? 'Essence' }}</span>
                    </div>
                </div>
                
                
                
                <!-- Car Description -->
                <div class="car-description">
                    <h3 class="description-title">Description</h3>
                    <p>{{ $car->description ?? 'Ce véhicule est en excellent état. Entretien régulier, première main, faible kilométrage. Disponible immédiatement pour un essai. Garantie incluse.' }}</p>
                </div>
                
                <!-- Call to Action Buttons -->
                <!-- Call to Action Buttons -->
<div class="car-actions">
    <!-- Lien d'appel téléphonique -->
    <a href="tel:+2250594930715" class="btn-action btn-primary">
        <i class="fas fa-phone"></i>
        <span>Appeler maintenant</span>
    </a>
    
    <!-- Lien WhatsApp -->
    <a href="https://wa.me/22505949307 15?text=Je%20suis%20intéressé%20par%20le%20véhicule%20{{ $car->marque }}%20{{ $car->modele }}%20(Réf:%20{{ $car->id }})" 
       class="btn-action btn-whatsapp"
       target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
    </a>
</div>
            </div>
        </div>
    </div>

    <style>
        /* Car Detail Page Styles */
        .car-detail-container {
            padding: 100px 0 60px;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .breadcrumb {
            display: flex;
            list-style: none;
            margin-bottom: 30px;
            flex-wrap: wrap;
            font-size: 0.9rem;
        }
        
        .breadcrumb li {
            display: flex;
            align-items: center;
        }
        
        .breadcrumb li:not(:last-child):after {
            content: '/';
            margin: 0 10px;
            color: #ccc;
        }
        
        .breadcrumb a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .breadcrumb a:hover {
            color: var(--primary-orange);
            text-decoration: underline;
        }
        
        .breadcrumb li:last-child {
            color: #777;
        }
        
        .car-detail {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 50px;
        }
        
        /* Image Gallery Styles */
        .car-image-container {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .main-image-slider {
            position: relative;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .slider-item {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .slider-item.active {
            opacity: 1;
            z-index: 1;
        }
        
        .slider-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-thumbnails {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px 0;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-orange) #e1e1e1;
        }
        
        .image-thumbnails::-webkit-scrollbar {
            height: 6px;
        }
        
        .image-thumbnails::-webkit-scrollbar-track {
            background: #e1e1e1;
            border-radius: 10px;
        }
        
        .image-thumbnails::-webkit-scrollbar-thumb {
            background-color: var(--primary-orange);
            border-radius: 10px;
        }
        
        .thumbnail {
            flex: 0 0 auto;
            width: 80px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            opacity: 0.7;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .thumbnail:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        .thumbnail.active {
            opacity: 1;
            border: 2px solid var(--primary-orange);
            transform: translateY(-2px);
        }
        
        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
            z-index: 2;
            pointer-events: none;
        }
        
        .slider-nav button {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
            pointer-events: auto;
            color: var(--dark-gray);
        }
        
        .slider-nav button:hover {
            background-color: var(--primary-orange);
            color: white;
            transform: scale(1.1);
        }
        
        .slider-control-dots {
            position: absolute;
            bottom: 15px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
            z-index: 2;
        }
        
        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .slider-dot.active {
            background-color: var(--primary-orange);
            transform: scale(1.2);
        }
        
        /* Car Info Styles */
        .car-info-container {
            display: flex;
            flex-direction: column;
        }
        
        .car-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .car-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 5px;
        }
        
        .car-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .car-badge.for-sale {
            background-color: rgba(0, 168, 107, 0.1);
            color: var(--primary-green);
        }
        
        .car-badge.for-rent {
            background-color: rgba(0, 86, 179, 0.1);
            color: var(--primary-blue);
        }
        
        .car-subtitle {
            display: flex;
            gap: 15px;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        .car-subtitle .reference {
            background-color: var(--light-gray);
            padding: 4px 10px;
            border-radius: 12px;
        }
        
        .car-subtitle .status {
            padding: 4px 10px;
            border-radius: 12px;
            font-weight: 500;
        }
        
        .car-subtitle .status.disponible {
            background-color: rgba(0, 168, 107, 0.1);
            color: var(--primary-green);
        }
        
        .car-subtitle .status.vendu, 
        .car-subtitle .status.loué {
            background-color: rgba(255, 0, 0, 0.1);
            color: #ff0000;
        }
        
        .car-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 25px;
        }
        
        .car-price .price-label {
            font-size: 1rem;
            color: #666;
            font-weight: 400;
        }
        
        .car-highlights {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .highlight-item {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: var(--light-gray);
            padding: 8px 15px;
            border-radius: 8px;
        }
        
        .highlight-item i {
            color: var(--primary-orange);
        }
        
        /* Specifications */
        .car-specs {
            margin-bottom: 30px;
        }
        
        .specs-title {
            font-size: 1.2rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .specs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .spec-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .spec-item:hover {
            background-color: var(--light-gray);
        }
        
        .spec-item i {
            color: var(--primary-orange);
            font-size: 1.2rem;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 122, 0, 0.1);
            border-radius: 50%;
        }
        
        .spec-label {
            display: block;
            font-size: 0.8rem;
            color: #666;
        }
        
        .spec-value {
            display: block;
            font-weight: 500;
            color: var(--dark-gray);
        }
        
        /* Description */
        .car-description {
            margin-bottom: 30px;
            line-height: 1.8;
            color: #555;
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid var(--primary-blue);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .description-title {
            font-size: 1.2rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }
       /* Styles pour les boutons d'action */
.car-actions {
    display: flex;
    gap: 15px;
    margin-top: auto;
    flex-wrap: wrap;
}

.btn-action {
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    text-align: center;
    flex: 1;
    min-width: 160px;
    justify-content: center;
}

.btn-primary {
    background-color: var(--primary-orange);
    color: white;
}

.btn-primary:hover {
    background-color: var(--secondary-orange);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.btn-whatsapp {
    background-color: #25D366;
    color: white;
}

.btn-whatsapp:hover {
    background-color: #128C7E;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Responsive pour petits écrans */
@media (max-width: 576px) {
    .car-actions {
        flex-direction: column;
    }
    
    .btn-action {
        width: 100%;
    }
}
        .btn-primary {
            background-color: var(--primary-orange);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-orange);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary {
            background-color: var(--primary-blue);
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: var(--secondary-blue);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
       
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .car-detail {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .main-image-slider {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .car-detail-container {
                padding-top: 80px;
            }
            
            .specs-grid {
                grid-template-columns: 1fr;
            }
            
            .main-image-slider {
                height: 300px;
            }
            
            .car-title {
                font-size: 1.8rem;
            }
            
            .car-price {
                font-size: 1.5rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
        }
        
        @media (max-width: 576px) {
            .car-detail-container {
                width: 95%;
                padding-top: 70px;
            }
            
            .car-detail {
                padding: 20px;
            }
            
            .main-image-slider {
                height: 250px;
            }
            
            .car-actions {
                flex-direction: column;
            }
            
            .breadcrumb {
                margin-bottom: 15px;
                font-size: 0.8rem;
            }
            
            .car-title {
                font-size: 1.5rem;
            }
            
            .car-highlights {
                flex-wrap: wrap;
                gap: 10px;
            }
            
            .contact-form-section {
                padding: 25px;
            }
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .main-image-slider, .thumbnail {
            animation: fadeIn 0.5s ease;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Récupérer les éléments du slider
            const sliderItems = document.querySelectorAll('.slider-item');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
            
            let currentIndex = 0;
            const totalSlides = sliderItems.length;
            
            // Si aucune image, ne pas afficher le slider
            if (totalSlides === 0) {
                return;
            }
            
            // Fonction pour afficher un slide spécifique
            function showSlide(index) {
                // Masquer tous les slides
                sliderItems.forEach(item => {
                    item.classList.remove('active');
                });
                
                // Désactiver tous les thumbnails et dots
                thumbnails.forEach(thumb => {
                    thumb.classList.remove('active');
                });
                
                dots.forEach(dot => {
                    dot.classList.remove('active');
                });
                
                // Afficher le slide actif
                sliderItems[index].classList.add('active');
                thumbnails[index].classList.add('active');
                dots[index].classList.add('active');
                
                // Assurer que le thumbnail actif est visible
                thumbnails[index].scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });
                
                // Mettre à jour l'index courant
                currentIndex = index;
            }
            
            // Événement pour le bouton précédent
            prevBtn.addEventListener('click', function() {
                let newIndex = currentIndex - 1;
                if (newIndex < 0) {
                    newIndex = totalSlides - 1;
                }
                showSlide(newIndex);
            });
            
            // Événement pour le bouton suivant
            nextBtn.addEventListener('click', function() {
                let newIndex = currentIndex + 1;
                if (newIndex >= totalSlides) {
                    newIndex = 0;
                }
                showSlide(newIndex);
            });
            
            // Événement pour les thumbnails
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener('click', function() {
                    showSlide(index);
                });
            });
            
            // Événement pour les dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    showSlide(index);
                });
            });
            
            // Navigation avec les touches du clavier
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    prevBtn.click();
                } else if (e.key === 'ArrowRight') {
                    nextBtn.click();
                }
            });
            
            // Démarrer automatiquement le slider si plusieurs images
            let slideInterval;
            
            function startSlideshow() {
                if (totalSlides > 1) {
                    slideInterval = setInterval(function() {
                        let newIndex = currentIndex + 1;
                        if (newIndex >= totalSlides) {
                            newIndex = 0;
                        }
                        showSlide(newIndex);
                    }, 5000); // Change de slide toutes les 5 secondes
                }
            }
            
            function stopSlideshow() {
                clearInterval(slideInterval);
            }
            
            // Arrêter le diaporama au survol
            const mainSlider = document.querySelector('.main-image-slider');
            if (mainSlider) {
                mainSlider.addEventListener('mouseenter', stopSlideshow);
                mainSlider.addEventListener('mouseleave', startSlideshow);
            }
            
            // Démarrer le diaporama
            startSlideshow();
            
            // Swipe pour appareils mobiles
            if (mainSlider) {
                let touchStartX = 0;
                let touchEndX = 0;
                
                mainSlider.addEventListener('touchstart', function(e) {
                    touchStartX = e.changedTouches[0].screenX;
                }, false);
                
                mainSlider.addEventListener('touchend', function(e) {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                }, false);
                
                function handleSwipe() {
                    if (touchEndX < touchStartX - 50) {
                        // Swipe gauche
                        nextBtn.click();
                    } else if (touchEndX > touchStartX + 50) {
                        // Swipe droite
                        prevBtn.click();
                    }
                }
            }
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</x-app-layout>