<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures à Louer | ADAMO AUTO</title>
    <meta name="description" content="Découvrez notre sélection de voitures à louer chez ADAMO AUTO. Des véhicules de qualité pour tous vos besoins de déplacement.">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

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
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
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
        color: #333;
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
    
    /* Hero Section */
    .hero {
        background: linear-gradient(rgba(0, 86, 179, 0.8), rgba(0, 59, 122, 0.8)), url('/api/placeholder/1920/600') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        margin-top: 70px;
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
    
    /* Footer */
    .footer {
        background-color: var(--primary-blue);
        color: white;
        padding: 60px 0 20px;
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-column h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.3rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-column h3:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary-orange);
    }
    
    .footer-links {
        list-style: none;
    }
    
    .footer-links li {
        margin-bottom: 10px;
    }
    
    .footer-links a {
        color: #ddd;
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .footer-links a:hover {
        color: var(--primary-orange);
    }
    
    .social-links {
        display: flex;
        margin-top: 20px;
    }
    
    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s;
    }
    
    .social-links a:hover {
        background-color: var(--primary-orange);
        transform: translateY(-3px);
    }
    
    .social-links i {
        color: white;
        font-size: 1.2rem;
    }
    
    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
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
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .section-title h2 {
            font-size: 2rem;
        }
        
        .nav-links {
            display: none;
        }
        
        section {
            padding: 60px 0;
        }
        
        .contact-container {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 480px) {
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

<!-- Header Section -->
<header>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">ADAMO <span>AUTO</span></a>
            <ul class="nav-links">
                <li><a href="#">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#cars">Véhicules</a></li>
                <li><a href="#contact" class="contact-btn">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Trouvez la voiture de vos rêves</h1>
        <p>Une large sélection de véhicules pour tous vos besoins de déplacement en Côte d'Ivoire</p>
        <a href="#cars" class="btn btn-primary">Découvrir nos véhicules</a>
    </div>
</section>



<!-- Cars Section -->
<section id="cars" class="popular-cars">
 <!-- Main Content -->
 <div class="py-8">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="section-title text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Voitures à Vendre</h2>
                <p class="text-gray-600 mt-2">Découvrez nos dernières voitures disponibles à l'achat</p>
            </div>

            <!-- Cars Grid -->
            <div class="cars-grid">
                <livewire:cars-for-sale />
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-title animated-fade">
            <h2>Pourquoi nous choisir</h2>
            <p>Découvrez les avantages de faire affaire avec ADAMO AUTO</p>
        </div>
        
        <div class="features-grid animated-fade">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-car-side"></i>
                </div>
                <h3>Véhicules récents</h3>
                <p>Notre flotte est composée de véhicules récents et bien entretenus pour votre confort et votre sécurité.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <h3>Tarifs compétitifs</h3>
                <p>Nous proposons des prix abordables et des offres spéciales pour s'adapter à votre budget.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Service personnalisé</h3>
                <p>Notre équipe est à votre disposition pour vous accompagner et répondre à vos besoins spécifiques.</p>
            </div>
        </div>
    </div>
</section>
        
      
 <!-- Contact Section -->
 <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-nous</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Besoin d'informations?</h3>
                    <p>Notre équipe est à votre écoute pour vous accompagner dans votre projet d'achat, de location ou d'entretien de véhicule.</p>
                    <ul class="contact-details">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Abidjan, Cocody Riviera Palmeraie, Côte d'Ivoire</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+225 07 07 07 07 07</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>contact@adamo-auto.ci</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Lun-Sam: 8h00 - 18h00</span>
                        </li>
                    </ul>
                </div>
                <div class="contact-form">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="nom" class="form-label">Nom complet</label>
                            <input type="text" id="nom" name="nom" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Envoyer votre message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>À propos</h3>
                    <p>ADAMO AUTO-SERVICE BUSINESS est le leader de la vente et de la location de véhicules en Côte d'Ivoire depuis 2010.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#cars">Véhicules</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Achat de voitures</a></li>
                        <li><a href="#">Location de voitures</a></li>
                        <li><a href="#">Entretien & Réparation</a></li>
                        <li><a href="#">Financement</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 ADAMO AUTO-SERVICE BUSINESS. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

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

    // Transmettre l'état d'authentification de Laravel à JavaScript
    function checkAuth(event, element) {
    const isAuthenticated = element.getAttribute('data-authenticated') === 'true';

    if (!isAuthenticated) {
        event.preventDefault();
        alert("Vous devez être connecté pour accéder à cette section.");
        window.location.href = "{{ route('login') }}";
    }
}

</script>

</body>
</html>