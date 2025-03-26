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
            
            /* Services Section */
            .services {
                background-color: var(--white);
            }
            
            .services-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
            }
            
            .service-card {
                background-color: var(--light-gray);
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                text-align: center;
                padding: 40px 30px;
            }
            
            .service-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            }
            
            .service-card i {
                font-size: 3rem;
                color: var(--primary-blue);
                margin-bottom: 20px;
                transition: color 0.3s;
            }
            
            .service-card:hover i {
                color: var(--primary-orange);
            }
            
            .service-card h3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.5rem;
                color: var(--primary-blue);
                margin-bottom: 15px;
            }
            
            .service-card p {
                color: #666;
                margin-bottom: 25px;
            }
            
            .btn-outline {
                background-color: transparent;
                color: var(--primary-blue);
                border: 2px solid var(--primary-blue);
                padding: 10px 25px;
            }
            
            .btn-outline:hover {
                background-color: var(--primary-blue);
                color: white;
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
            
            /* Contact Section */
            .contact {
                background-color: var(--white);
            }
            
            .contact-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 40px;
            }
            
            .contact-info {
                color: #444;
            }
            
            .contact-info h3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.8rem;
                color: var(--primary-blue);
                margin-bottom: 20px;
            }
            
            .contact-info p {
                margin-bottom: 25px;
                line-height: 1.8;
            }
            
            .contact-details {
                list-style: none;
            }
            
            .contact-details li {
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }
            
            .contact-details i {
                color: var(--primary-orange);
                font-size: 1.2rem;
                margin-right: 15px;
                width: 25px;
            }
            
            .contact-form {
                background-color: var(--light-gray);
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-label {
                display: block;
                font-weight: 500;
                margin-bottom: 8px;
                color: #444;
            }
            
            .form-control {
                width: 100%;
                padding: 12px 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                font-family: 'Poppins', sans-serif;
                transition: border-color 0.3s;
            }
            
            .form-control:focus {
                outline: none;
                border-color: var(--primary-blue);
            }
            
            textarea.form-control {
                resize: vertical;
                min-height: 120px;
            }
            
            .btn-submit {
                background-color: var(--primary-orange);
                color: white;
                border: none;
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                font-family: 'Poppins', sans-serif;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.3s;
            }
            
            .btn-submit:hover {
                background-color: var(--secondary-orange);
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(230, 108, 0, 0.3);
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
                
                .contact-container {
                    grid-template-columns: 1fr;
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

</x-app-layout>