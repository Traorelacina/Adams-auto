<x-app-layout>
    <x-slot name="customCss">
        <style>
            /* Hero Section */
            .hero {
                background: linear-gradient(rgba(0, 86, 179, 0.8), rgba(0, 59, 122, 0.8)), url('/images/hero-bg.jpg') no-repeat center center/cover;
                height: 80vh;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
            }
            
            .hero-content {
                max-width: 800px;
                padding: 0 20px;
            }
            
            .hero h1 {
                font-family: 'Montserrat', sans-serif;
                font-size: 3.5rem;
                font-weight: 700;
                margin-bottom: 20px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }
            
            .hero p {
                font-size: 1.3rem;
                margin-bottom: 30px;
            }
            
            .btn {
                display: inline-block;
                padding: 15px 30px;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                transition: all 0.3s ease;
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
            
            /* Section Styles */
            section {
                padding: 80px 0;
            }
            
            .section-title {
                text-align: center;
                margin-bottom: 50px;
                position: relative;
            }
            
            .section-title h2 {
                font-family: 'Montserrat', sans-serif;
                font-size: 2.5rem;
                color: var(--primary-blue);
                font-weight: 700;
                display: inline-block;
                margin-bottom: 10px;
            }
            
            .section-title h2:after {
                content: '';
                display: block;
                width: 80px;
                height: 4px;
                background: var(--primary-orange);
                margin: 15px auto 0;
                border-radius: 2px;
            }
            
            .section-title p {
                color: #666;
                font-size: 1.1rem;
                max-width: 700px;
                margin: 0 auto;
            }
            
            /* Popular Cars Section */
            .popular-cars {
                background-color: var(--light-gray);
                padding: 80px 0;
            }
            
            .cars-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-bottom: 30px;
            }
            
            .car-card {
                background-color: var(--white);
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .car-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            }
            
            .car-image {
                height: 200px;
                overflow: hidden;
                position: relative;
            }
            
            .car-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s;
            }
            
            .car-card:hover .car-image img {
                transform: scale(1.1);
            }
            
            .car-details {
                padding: 20px;
            }
            
            .car-details h3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.3rem;
                color: var(--primary-blue);
                margin-bottom: 10px;
            }
            
            .car-info {
                display: flex;
                justify-content: space-between;
                margin-bottom: 15px;
                color: #666;
            }
            
            .car-price {
                font-weight: 600;
                color: var(--primary-green);
                margin-bottom: 15px;
                font-size: 1.1rem;
            }
            
            .btn-green {
                background-color: var(--primary-green);
                color: white;
                padding: 12px 20px;
                border-radius: 30px;
                display: block;
                text-align: center;
                text-decoration: none;
                font-weight: 600;
                transition: background-color 0.3s, transform 0.3s;
            }
            
            .btn-green:hover {
                background-color: var(--secondary-green);
                transform: translateY(-3px);
            }
            
            /* Why Choose Us Section */
            .why-choose-us {
                background-color: var(--white);
                padding: 80px 0;
            }
            
            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
            }
            
            .feature-card {
                background-color: var(--light-gray);
                border-radius: 15px;
                padding: 30px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            
            .feature-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            .feature-icon {
                font-size: 3rem;
                color: var(--primary-blue);
                margin-bottom: 20px;
            }
            
            .feature-card h3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.5rem;
                color: var(--primary-blue);
                margin-bottom: 15px;
            }
            
            /* Animation classes */
            .animated-fade {
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.6s ease-out;
            }
            
            .animated-fade.visible {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Responsive */
            @media (max-width: 1024px) {
                .section-title h2 {
                    font-size: 2.2rem;
                }
                
                .hero h1 {
                    font-size: 3rem;
                }
            }
            
            @media (max-width: 768px) {
                .hero {
                    height: 60vh;
                }
                
                .hero h1 {
                    font-size: 2.5rem;
                }
                
                .hero p {
                    font-size: 1rem;
                }
                
                .section-title h2 {
                    font-size: 2rem;
                }
                
                section {
                    padding: 60px 0;
                }
            }
            
            @media (max-width: 480px) {
                .hero {
                    height: 50vh;
                }
                
                .hero h1 {
                    font-size: 2rem;
                }
                
                .section-title h2 {
                    font-size: 1.8rem;
                }
                
                .btn {
                    padding: 12px 25px;
                }
            }
        </style>
    </x-slot>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Trouvez la voiture parfaite à louer</h1>
            <p>Une large sélection de véhicules de qualité pour tous vos besoins de déplacement en Côte d'Ivoire</p>
            <a href="#cars" class="btn btn-primary">Voir nos véhicules disponibles</a>
        </div>
    </section>

    <!-- Cars Section -->
    <section id="cars" class="popular-cars">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="section-title animated-fade">
                <h2>Nos véhicules à louer</h2>
                <p>Découvrez notre sélection de véhicules disponibles pour location</p>
            </div>

            <!-- Cars Grid -->
            <div class="cars-grid">
                <livewire:cars-for-rent />
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container mx-auto px-4">
            <div class="section-title animated-fade">
                <h2>Pourquoi nous choisir</h2>
                <p>Découvrez les avantages de louer chez ADAMO AUTO</p>
            </div>
            
            <div class="features-grid animated-fade">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <h3>Flotte récente</h3>
                    <p>Nos véhicules sont régulièrement renouvelés et parfaitement entretenus pour votre sécurité et confort.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Tarifs compétitifs</h3>
                    <p>Des prix transparents et adaptés à tous les budgets, avec des offres promotionnelles régulières.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Assistance 24/7</h3>
                    <p>Notre équipe est disponible à tout moment pour vous assister en cas de besoin pendant votre location.</p>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const animatedElements = document.querySelectorAll('.animated-fade');
                
                function checkScroll() {
                    animatedElements.forEach(element => {
                        const elementTop = element.getBoundingClientRect().top;
                        const elementVisible = 150;
                        
                        if (elementTop < window.innerHeight - elementVisible) {
                            element.classList.add('visible');
                        }
                    });
                }

                // Initial check
                checkScroll();
                
                // Check on scroll
                window.addEventListener('scroll', checkScroll);
            });

            function checkAuth(event, element) {
                const isAuthenticated = element.getAttribute('data-authenticated') === 'true';

                if (!isAuthenticated) {
                    event.preventDefault();
                    alert("Vous devez être connecté pour accéder à cette section.");
                    window.location.href = "{{ route('login') }}";
                }
            }
        </script>
    </x-slot>
</x-app-layout>