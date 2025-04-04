<x-app-layout>
    <!-- Hero Section with Sliding Background -->
    <section class="hero">
        <!-- Background Images Slideshow -->
        <div class="hero-slideshow">
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')"></div>
        </div>
        
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <div class="hero-tagline">Excellence Automobile depuis 2020</div>
            <h1>ADAM'S AUTO-SERVICE BUSINESS</h1>
            <p>Le leader de la vente et location de véhicules en Côte d'Ivoire</p>
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">
                    <span>Découvrir nos services</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="#contact" class="btn btn-outline">
                    <span>Nous contacter</span>
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            
            <!-- Stats Bar -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number" data-count="200">0</div>
                    <div class="stat-label">Clients satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="20">0</div>
                    <div class="stat-label">Véhicules disponibles</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Années d'expérience</div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="scroll-down">
            <div class="mouse">
                <div class="scroller"></div>
            </div>
            <span>Défiler vers le bas</span>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <span class="section-subtitle">Nos Prestations</span>
                <h2>Services Premium</h2>
                <p>Nous offrons une gamme complète de services automobiles haut de gamme</p>
            </div>
            <div class="services-grid">
                <!-- Achat de voitures -->
                <div class="service-card animated-fade">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Achat de Voitures</h3>
                    <p>Large sélection de véhicules neufs et d'occasion avec options de financement personnalisées.</p>
                    <a href="#" class="btn btn-outline">
                        <span>Explorer</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-hover-effect"></div>
                </div>

                <!-- Location de voitures -->
                <div class="service-card animated-fade">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Location de Voitures</h3>
                    <p>Solutions de location flexible pour particuliers et professionnels avec assistance 24/7.</p>
                    <a href="#" class="btn btn-outline">
                        <span>Découvrir</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-hover-effect"></div>
                </div>

                <!-- Entretien -->
                <div class="service-card animated-fade">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Entretien & Réparation</h3>
                    <p>Service technique certifié utilisant des pièces d'origine et équipements haute technologie.</p>
                    <a href="#" class="btn btn-outline">
                        <span>En savoir plus</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-hover-effect"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="cars" class="featured-cars py-16">
        <div class="container mx-auto px-4">
            <div class="section-title text-center mb-12">
                <span class="text-orange-500 font-medium block mb-2">Notre Collection</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Véhicules en Vedette</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Découvrez nos meilleures offres du moment</p>
            </div>
            
            <!-- Cars Navigation -->
            <div class="cars-navigation">
                <button class="nav-btn active" data-category="sale">À vendre</button>
                <button class="nav-btn" data-category="rent">À louer</button>
            </div>
            
            <!-- Cars Grid -->
            <div class="cars-container">
                <!-- Sale Cars -->
                <div class="cars-grid sale-cars active">
                    <livewire:cars-for-sale-home />
                </div>
                
                <!-- Rent Cars -->
                <div class="cars-grid rent-cars">
                    <livewire:cars-for-rent-home />
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a id="inventory-link" href="{{ route('login') }}" class="btn btn-primary inline-flex items-center">
                    <span>Voir tout notre inventaire</span>
                    <i class="fas fa-chevron-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <span class="section-subtitle">Témoignages</span>
                <h2>Ce que disent nos clients</h2>
            </div>
            
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Service exceptionnel! J'ai trouvé la voiture parfaite à un prix imbattable. L'équipe est professionnelle et très à l'écoute."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Jean Koffi</h4>
                            <span>Abidjan</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Location sans souci pour nos besoins professionnels. Véhicules toujours impeccables et processus de réservation simplissime."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Amina Diarra</h4>
                            <span>Directrice d'entreprise</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"Atelier de réparation fiable avec des techniciens compétents. Mon véhicule est toujours entre de bonnes mains chez ADAMO."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Paul Aké</h4>
                            <span>Client fidèle</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands">
        <div class="container">
            <h3>Nous travaillons avec les meilleures marques</h3>
            <div class="brands-grid">
                <img src="https://logo.clearbit.com/toyota.com" alt="Toyota">
                <img src="https://logo.clearbit.com/mercedes-benz.com" alt="Mercedes">
                <img src="https://logo.clearbit.com/bmw.com" alt="BMW">
                <img src="https://logo.clearbit.com/hyundai.com" alt="Hyundai">
                <img src="https://logo.clearbit.com/ford.com" alt="Ford">
                <img src="https://logo.clearbit.com/nissan.com" alt="Nissan">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <span class="section-subtitle">Restons en contact</span>
                <h2>Contactez notre équipe</h2>
                <p>Disponible 7j/7 pour répondre à vos questions</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Adresse</h4>
                            <p>Cocody Riviera Palmeraie, Abidjan, Côte d'Ivoire</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4>Téléphone</h4>
                            <p>+225 05 94 93 07 15</p>
                         
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>contact@adamo-auto.ci</p>
                            <p>ventes@adamo-auto.ci</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Heures d'ouverture</h4>
                            <p>Lundi - Samedi: 8h00 - 18h00</p>
                            <p>Dimanche: Sur rendez-vous</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h4>Suivez-nous</h4>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
    <h3>Envoyez-nous un message</h3>
    
    @if(session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf <!-- Protection CSRF obligatoire -->
        
        <div class="form-row">
            <div class="form-group">
                <label for="nom" class="form-label">Nom complet *</label>
                <input type="text" id="nom" name="nom" class="form-control" 
                       value="{{ old('nom') }}" required>
                @error('nom')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email *</label>
                <input type="email" id="email" name="email" class="form-control" 
                       value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="telephone" class="form-label">Téléphone *</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" 
                       value="{{ old('telephone') }}" required>
                @error('telephone')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sujet" class="form-label">Sujet</label>
                <select id="sujet" name="sujet" class="form-control">
                    <option value="vente" {{ old('sujet') == 'vente' ? 'selected' : '' }}>Demande d'achat</option>
                    <option value="location" {{ old('sujet') == 'location' ? 'selected' : '' }}>Demande de location</option>
                    <option value="entretien" {{ old('sujet') == 'entretien' ? 'selected' : '' }}>Demande d'entretien</option>
                    <option value="autre" {{ old('sujet') == 'autre' ? 'selected' : '' }}>Autre demande</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="message" class="form-label">Message *</label>
            <textarea id="message" name="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
            @error('message')
                <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn-submit">
            <span>Envoyer le message</span>
            <i class="fas fa-paper-plane"></i>
        </button>
    </form>
</div>
    </section>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>


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
            --dark-gray: #333;
            --light-blue: #e6f0ff;
            --dark: #1a1a1a;
        }
        
        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            width: 90%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            color: var(--white);
            padding: 120px 0 80px;
        }
        
        .hero-slideshow {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        
        .hero-slideshow .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            z-index: 1;
        }
        
        .hero-slideshow .slide.active {
            opacity: 1;
        }
        
        .hero-overlay {
            position: absolute;
            width: 100%;
            height: 100%;background: linear-gradient(135deg, rgba(0, 86, 179, 0.5) 0%, rgba(0, 59, 122, 0.45) 100%);
            z-index: 2;
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeInUp 1s ease;
            text-align: center;
            margin: 0 auto;
        }
        
        .hero-tagline {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn i {
            transition: transform 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary-orange);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-orange);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary:hover i {
            transform: translateX(5px);
        }
        
        .btn-outline {
            border: 2px solid var(--white);
            color: var(--white);
            background: transparent;
        }
        
        .btn-outline:hover {
            background-color: var(--white);
            color: var(--primary-blue);
            transform: translateY(-3px);
        }
        
        .btn-large {
            padding: 18px 45px;
            font-size: 1.2rem;
        }
        
        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 60px;
            flex-wrap: wrap;
        }
        
        .stat-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            padding: 25px 30px;
            border-radius: 10px;
            min-width: 150px;
            transition: transform 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-10px);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 5px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            color: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        
        .scroll-down:hover {
            opacity: 1;
        }
        
        .mouse {
            width: 25px;
            height: 40px;
            border: 2px solid var(--white);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            margin-bottom: 5px;
        }
        
        .scroller {
            width: 3px;
            height: 8px;
            background: var(--white);
            border-radius: 3px;
            margin-top: 5px;
            animation: scroll 2s infinite;
        }
        
        .scroll-down span {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Section Titles */
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-subtitle {
            display: block;
            color: var(--primary-orange);
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: var(--primary-orange);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        /* Services Section */
        .services {
            background-color: var(--white);
            padding: 100px 0;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: var(--white);
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--light-blue) 0%, rgba(0, 86, 179, 0.1) 100%);
            border-radius: 50%;
            font-size: 2.5rem;
            color: var(--primary-blue);
            transition: all 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            transform: rotateY(180deg);
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: var(--white);
        }
        
        .service-card h3 {
            margin-bottom: 15px;
            color: var(--primary-blue);
            font-size: 1.5rem;
        }
        
        .service-card p {
            color: #666;
            margin-bottom: 20px;
            font-size: 1rem;
        }
        
        .service-hover-effect {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(135deg, rgba(0, 86, 179, 0.03) 0%, rgba(0, 86, 179, 0.01) 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .service-card:hover .service-hover-effect {
            opacity: 1;
        }
        
        /* Featured Cars */
        .featured-cars {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .cars-navigation {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
        }
        
        .nav-btn {
            padding: 12px 30px;
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .nav-btn.active, .nav-btn:hover {
            background: var(--primary-blue);
            color: var(--white);
        }
        
        .cars-container {
            position: relative;
            min-height: 500px;
        }
        
        .cars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            opacity: 0;
            height: 0;
            overflow: hidden;
            transition: opacity 0.5s ease;
            position: absolute;
            width: 100%;
        }
        
        .cars-grid.active {
            opacity: 1;
            height: auto;
            position: relative;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background-color: var(--white);
        }
        
        .testimonials-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .rating {
            color: var(--primary-orange);
            margin-bottom: 20px;
        }
        
        .testimonial-content p {
            font-style: italic;
            color: #555;
            margin-bottom: 25px;
            position: relative;
        }
        
        .testimonial-content p:before {
            content: '"';
            font-size: 4rem;
            color: rgba(0, 86, 179, 0.1);
            position: absolute;
            top: -20px;
            left: -15px;
            line-height: 1;
            z-index: -1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
            color: var(--primary-blue);
        }
        
        .author-info span {
            font-size: 0.9rem;
            color: #777;
        }
        
        /* Brands */
        .brands {
            padding: 60px 0;
            background-color: var(--light-blue);
        }
        
        .brands h3 {
            text-align: center;
            color: var(--primary-blue);
            margin-bottom: 40px;
            font-size: 1.5rem;
        }
        
        .brands-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }
        
        .brands-grid img {
            height: 40px;
            opacity: 0.6;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }
        
        .brands-grid img:hover {
            opacity: 1;
            filter: grayscale(0%);
        }
        
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--white);
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 50px;
        }
        
        .contact-info {
            padding: 20px;
        }
        
        .info-card {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .info-card i {
            font-size: 1.5rem;
            color: var(--primary-orange);
            margin-right: 20px;
            margin-top: 5px;
        }
        
        .info-card h4 {
            color: var(--primary-blue);
            margin-bottom: 5px;
            font-size: 1.2rem;
        }
        
        .info-card p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 5px;
        }
        
        .social-links h4 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--light-gray);
            color: var(--primary-blue);
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-blue);
            color: var(--white);
            transform: translateY(-3px);
        }
        
        .contact-form {
            background-color: var(--light-gray);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .contact-form h3 {
            color: var(--primary-blue);
            margin-bottom: 25px;
            font-size: 1.5rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s;
            background-color: var(--white);
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
            outline: none;
        }
        
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 15px;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn-submit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 16px;
            background-color: var(--primary-orange);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .btn-submit:hover {
            background-color: var(--secondary-orange);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 122, 0, 0.3);
        }
        
        .btn-submit:hover i {
            transform: translateX(3px);
        }
        
        /* CTA Section */
        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-orange);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--secondary-orange);
            transform: translateY(-5px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes scroll {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(15px);
                opacity: 0;
            }
        }
        
        .animated-fade {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .animated-fade.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3rem;
            }
            
            .section-title h2 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 2.3rem;
            }
            
            .hero-stats {
                gap: 20px;
            }
            
            .stat-item {
                padding: 20px 25px;
                min-width: 130px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero {
                padding: 100px 0 60px;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .services-grid,
            .cars-grid,
            .contact-container,
            .testimonials-slider {
                grid-template-columns: 1fr;
            }
            
            .service-card {
                max-width: 400px;
                margin: 0 auto;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 15px;
                align-items: center;
            }
            
            .stat-item {
                width: 200px;
            }
            
            .cta-content h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
                line-height: 1.3;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn {
                padding: 12px 30px;
                font-size: 1rem;
                width: 100%;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .contact-form {
                padding: 30px 20px;
            }
            
            .back-to-top {
                width: 40px;
                height: 40px;
                font-size: 1rem;
                bottom: 20px;
                right: 20px;
            }
            
            .cta-content h2 {
                font-size: 1.8rem;
            }
            
            .cta-content p {
                font-size: 1rem;
            }
        }
    </style>

   
            <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hero Slideshow
            const slides = document.querySelectorAll('.hero-slideshow .slide');
            let currentSlide = 0;
            const slideInterval = 5000;

            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            let slideTimer = setInterval(nextSlide, slideInterval);

            const hero = document.querySelector('.hero');
            hero.addEventListener('mouseenter', () => {
                clearInterval(slideTimer);
            });

            hero.addEventListener('mouseleave', () => {
                slideTimer = setInterval(nextSlide, slideInterval);
            });

            slides[0].classList.add('active');

            // Animated counter for stats
            const statNumbers = document.querySelectorAll('.stat-number');
            const animationDuration = 2000;
            const frameDuration = 1000 / 60;
            const totalFrames = Math.round(animationDuration / frameDuration);
            
            statNumbers.forEach(stat => {
                const countTo = parseInt(stat.getAttribute('data-count'));
                const easeOutQuad = t => t * (2 - t);
                
                let frame = 0;
                const counter = setInterval(() => {
                    frame++;
                    const progress = easeOutQuad(frame / totalFrames);
                    const currentCount = Math.round(countTo * progress);
                    
                    stat.textContent = currentCount;
                    
                    if (frame === totalFrames) {
                        clearInterval(counter);
                    }
                }, frameDuration);
            });

            // Cars navigation with dynamic link update
            const navBtns = document.querySelectorAll('.nav-btn');
            const carsGrids = document.querySelectorAll('.cars-grid');
            const inventoryLink = document.getElementById('inventory-link');
            
            navBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.getAttribute('data-category');
                    
                    // Update active button
                    navBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    // Show corresponding cars grid
                    carsGrids.forEach(grid => {
                        grid.classList.remove('active');
                        if (grid.classList.contains(`${category}-cars`)) {
                            grid.classList.add('active');
                        }
                    });
                    
                    // Update inventory link based on active tab
                    inventoryLink.href = category === 'rent' 
                        ? "{{ route('login') }}" 
                        : "{{ route('login') }}";
                });
            });

            // Scroll reveal animation
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

            checkScroll();
            window.addEventListener('scroll', checkScroll);

            // Back to top button
            const backToTopButton = document.querySelector('.back-to-top');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('active');
                } else {
                    backToTopButton.classList.remove('active');
                }
            });
            
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>


       
</x-app-layout>