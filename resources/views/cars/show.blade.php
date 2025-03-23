<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADAMO AUTO-SERVICE BUSINESS - Royaume des véhicules en Côte d'Ivoire</title>
    <!-- Font Awesome -->
    @livewireStyles
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0056b3;
            --secondary-blue: #003b7a;
            --primary-orange: #ff7a00;
            --secondary-orange: #e66c00;
            --primary-green: #00a86b;
            --secondary-green: #008c58;
            --light-gray: #f8f9fa;
            --white: #ffffff;
            --dark-gray: #333333;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-gray);
            line-height: 1.6;
            background-color: #f5f7fa;
        }
        
        /* Navigation */
        .navbar {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            padding: 15px 0;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--primary-orange);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark-gray);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary-orange);
        }
        
        .nav-links .contact-btn {
            background-color: var(--primary-green);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            transition: background-color 0.3s;
        }
        
        .nav-links .contact-btn:hover {
            background-color: var(--secondary-green);
            color: white;
        }
        
        /* Car Detail Page Specific Styles */
        .car-detail-container {
            padding-top: 100px; /* Space for fixed navbar */
            padding-bottom: 60px;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .breadcrumb {
            display: flex;
            list-style: none;
            margin-bottom: 25px;
            flex-wrap: wrap;
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
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        /* Styles pour la galerie d'images */
        .car-image-container {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 15px;
            height: auto;
        }
        
        .main-image-slider {
            position: relative;
            height: 350px;
            border-radius: 15px;
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
            padding: 5px 0;
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
        }
        
        .slider-nav button:hover {
            background-color: var(--primary-orange);
            color: white;
            transform: scale(1.1);
        }
        
        .slider-nav button:focus {
            outline: none;
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
        
        .car-info-container {
            display: flex;
            flex-direction: column;
        }
        
        .car-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.2rem;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .car-subtitle {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        .car-price {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 25px;
            background-color: rgba(0, 168, 107, 0.1);
            padding: 8px 15px;
            border-radius: 8px;
            display: inline-block;
        }
        
        .car-specs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
            background-color: var(--light-gray);
            padding: 20px;
            border-radius: 12px;
        }
        
        .car-spec-item {
            display: flex;
            align-items: center;
        }
        
        .car-spec-item i {
            color: var(--primary-orange);
            margin-right: 12px;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }
        
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
        
        .car-actions {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }
        
        .btn-action {
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--primary-orange);
            color: white;
            flex: 1;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-orange);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary {
            background-color: var(--primary-blue);
            color: white;
            flex: 1;
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
            .nav-links {
                display: none;
            }
            
            .car-specs {
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
        }
        
        @media (max-width: 576px) {
            .car-detail-container {
                width: 95%;
                padding-top: 80px;
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
            }
            
            .car-title {
                font-size: 1.5rem;
            }
        }
        
        /* Animation pour le chargement des images */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .main-image-slider, .thumbnail {
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>

<body>
    @livewireScripts

    <!-- Navigation (left as is) -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="/" class="logo">ADAMO <span>AUTO</span></a>
            <ul class="nav-links">
                <li><a href="/">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#cars">Véhicules</a></li>
                <li><a href="#contact" class="contact-btn">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Car Detail Page -->
    <div class="car-detail-container">
        <!-- Breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="/">Accueil</a></li>
            <li><a href="#">{{ $car->type === 'vente' ? 'Voitures à vendre' : 'Voitures à louer' }}</a></li>
            <li>{{ $car->marque }} {{ $car->modele }}</li>
        </ul>
        
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
                <h1 class="car-title">{{ $car->marque }} {{ $car->modele }}</h1>
                <div class="car-subtitle">{{ $car->type === 'vente' ? 'Voiture à vendre' : 'Voiture à louer' }} - Référence: #{{ $car->id }}</div>
                <div class="car-price">{{ number_format($car->prix, 0, ',', ' ') }} FCFA</div>
                
                <!-- Car Specifications -->
                <div class="car-specs">
                    <div class="car-spec-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Année: {{ $car->annee ?? '2023' }}</span>
                    </div>
                    <div class="car-spec-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Kilométrage: {{ number_format($car->kilometrage, 0, ',', ' ') ?? '15 000' }} km</span>
                    </div>
                    <div class="car-spec-item">
                        <i class="fas fa-gas-pump"></i>
                        <span>Carburant: {{ $car->carburant ?? 'Essence' }}</span>
                    </div>
                    <div class="car-spec-item">
                        <i class="fas fa-cogs"></i>
                        <span>Transmission: {{ $car->transmission ?? 'Automatique' }}</span>
                    </div>
                    <div class="car-spec-item">
                        <i class="fas fa-car"></i>
                        <span>État: {{ $car->statut ?? 'Disponible' }}</span>
                    </div>
                    <div class="car-spec-item">
                        <i class="fas fa-palette"></i>
                        <span>Couleur: {{ $car->couleur ?? 'Non spécifiée' }}</span>
                    </div>
                </div>
                
                <!-- Car Description -->
                <div class="car-description">
                    <p>{{ $car->description ?? 'Ce véhicule est en excellent état. Entretien régulier, première main, faible kilométrage. Disponible immédiatement pour un essai. Garantie incluse.' }}</p>
                </div>
                
                <!-- Call to Action Buttons -->
                <div class="car-actions">
                    <a href="#" class="btn-action btn-primary">{{ $car->type === 'vente' ? 'Acheter maintenant' : 'Réserver maintenant' }}</a>
                    <a href="#contact" class="btn-action btn-secondary">Contacter le vendeur</a>
                </div>
            </div>
        </div>
    </div>

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
            mainSlider.addEventListener('mouseenter', stopSlideshow);
            mainSlider.addEventListener('mouseleave', startSlideshow);
            
            // Démarrer le diaporama
            startSlideshow();
            
            // Swipe pour appareils mobiles
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
        });
    </script>
</body>
</html>