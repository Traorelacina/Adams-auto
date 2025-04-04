<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADAM'S AUTO SERVICES</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
        }
        
        /* Color variables */
        :root {
            --primary-blue: #1A5F7A;
            --secondary-blue: #57C5B6;
            --primary-green: #2D9E6F;
            --accent-orange: #FF6B35;
            --white: #fff;
            --light-gray: #f5f5f5;
            --dark-gray: #444;
        }
        
        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Typography */
        h1, h2, h3 {
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        h1 {
            font-size: 42px;
        }
        
        h2 {
            font-size: 32px;
            color: var(--primary-blue);
        }
        
        h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        p {
            margin-bottom: 15px;
        }
        
        /* Header/Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: var(--white);
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/api/placeholder/400/320') no-repeat center right;
            background-size: contain;
            opacity: 0.1;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }
        
        .hero h1 {
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background-color: var(--accent-orange);
        }
        
        .hero-tagline {
            font-size: 24px;
            font-weight: 300;
            margin-bottom: 30px;
        }
        
        .services-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }
        
        .service-badge {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .service-badge:hover {
            background-color: var(--accent-orange);
            transform: translateY(-3px);
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background-color: var(--white);
        }
        
        .two-col-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        @media (min-width: 768px) {
            .two-col-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
        
        .card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 5px;
            background-color: var(--accent-orange);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card h2 {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        
        .card h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-green);
        }
        
        /* Services List */
        .services-list {
            list-style: none;
        }
        
        .service-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .service-icon {
            flex-shrink: 0;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 107, 53, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-orange);
            font-size: 24px;
            margin-right: 20px;
        }
        
        .service-details h3 {
            color: var(--primary-green);
            margin-bottom: 5px;
        }
        
        .service-details p {
            color: var(--dark-gray);
        }
        
        /* Network Section */
        .network {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }
        
        .section-header h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-green);
        }
        
        .three-col-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        @media (min-width: 768px) {
            .three-col-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        .network-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .network-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .network-icon {
            font-size: 40px;
            color: var(--primary-green);
            margin-bottom: 20px;
        }
        
        .network-card h3 {
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .route-info {
            margin-top: 15px;
            font-size: 14px;
            color: var(--accent-orange);
            font-weight: 500;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            background-color: var(--white);
        }
        
        .contact-card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 60px 40px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .contact-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .contact-link {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: var(--light-gray);
            border-radius: 30px;
            color: var(--primary-blue);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-link:hover {
            background-color: var(--primary-blue);
            color: var(--white);
        }
        
        .contact-link i {
            margin-right: 10px;
        }
        
        .contact-divider {
            width: 100%;
            height: 1px;
            background-color: #eee;
            margin: 30px 0;
        }
        
        /* Location Section */
        .location {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        .location-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        .map-container {
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-bottom: 30px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .location-card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-top: 30px;
        }
        
        .location-details {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }
        
        .location-detail {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .location-detail i {
            width: 40px;
            height: 40px;
            background-color: rgba(45, 158, 111, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-green);
            font-size: 18px;
            margin-right: 15px;
        }
        
        .team-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
    max-width: 420px;
    margin: 0 auto;
}

.team-card:hover {
    transform: translateY(-5px);
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: #4a6fa5;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.5rem;
    margin: 0 auto 1rem;
}

h3 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.specialty {
    color: #7f8c8d;
    font-style: italic;
    margin-bottom: 1.5rem;
}

.skills {
    display: flex;
    gap: 1rem;
    margin: 1.5rem 0;
    text-align: left;
}

.backend, .frontend {
    flex: 1;
    padding: 0.8rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.backend h4 { color: #e74c3c; }
.frontend h4 { color: #3498db; }

.team-icons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    font-size: 1.8rem;
    color: #34495e;
    margin: 1.5rem 0;
}

.team-icons i:hover {
    color: #2980b9;
    transform: scale(1.2);
    transition: all 0.3s ease;
}

.btn-ghost {
    display: inline-block;
    padding: 0.6rem 1.2rem;
    border: 2px solid #3498db;
    color: #3498db;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-ghost:hover {
    background: #3498db;
    color: white;
}

@media (max-width: 768px) {
    .skills {
        flex-direction: column;
    }
}
        
        /* Footer */
        .footer {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 40px 0;
            text-align: center;
            font-size: 14px;
        }
        
        .footer p {
            margin: 0;
        }

        /* Button Styling */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: var(--accent-orange);
            color: var(--white);
            border: none;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: var(--primary-green);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--accent-orange);
            color: var(--accent-orange);
        }

        .btn-outline:hover {
            background-color: var(--accent-orange);
            color: var(--white);
        }
        
        .btn-direction {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-direction i {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>ADAM'S AUTO SERVICES</h1>
                <p class="hero-tagline">Le Royaume des véhicules en Côte d'Ivoire</p>
                <div class="services-badges">
                    <span class="service-badge">Achats de voitures</span>
                    <span class="service-badge">Location</span>
                    <span class="service-badge">Import/Export</span>
                </div>
                <a href="#contact" class="btn">Contactez-nous</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="two-col-grid">
                <div class="card">
                    <h2>Notre Histoire</h2>
                    <p>ADAM'S AUTO SERVICES s'est imposé comme le leader incontesté du marché automobile en Côte d'Ivoire. Fondée par Adam's Sanogo, notre entreprise allie expertise locale et vision internationale.</p>
                    <p>Nous nous engageons à fournir des véhicules de qualité et un service personnalisé à chacun de nos clients, avec une transparence absolue dans toutes nos transactions.</p>
                    <a href="#" class="btn btn-outline">En savoir plus</a>
                </div>
                
                <div class="card">
                    <h2>Nos Services</h2>
                    <ul class="services-list">
                        <li class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="service-details">
                                <h3>Achat/Vente de véhicules</h3>
                                <p>Neufs et d'occasion, toutes marques</p>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="service-details">
                                <h3>Location flexible</h3>
                                <p>Court et long terme, tous budgets</p>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="service-details">
                                <h3>Réseau international</h3>
                                <p>Import/Export vers toute l'Afrique de l'Ouest</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Network Section -->
    <section class="network">
        <div class="container">
            <div class="section-header">
                <h2>Notre Réseau International</h2>
                <p>Connectés avec les principaux marchés automobiles d'Afrique de l'Ouest</p>
            </div>
            
            <div class="three-col-grid">
                <div class="network-card">
                    <div class="network-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Abidjan - Lomé</h3>
                    <p>Importation directe depuis le Togo</p>
                    <div class="route-info">
                        <i class="fas fa-arrow-right"></i> Services express
                    </div>
                </div>
                
                <div class="network-card">
                    <div class="network-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Abidjan - Cotonou</h3>
                    <p>Réseau établi avec le Bénin</p>
                    <div class="route-info">
                        <i class="fas fa-arrow-right"></i> Voitures de luxe
                    </div>
                </div>
                
                <div class="network-card">
                    <div class="network-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Abidjan - Burkina</h3>
                    <p>Exportation vers le Burkina Faso</p>
                    <div class="route-info">
                        <i class="fas fa-arrow-right"></i> 4x4 et utilitaires
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section (NOUVEAU) -->
    <section class="location" id="location">
        <div class="container">
            <div class="location-header">
                <h2>Notre Localisation</h2>
                <p>Trouvez-nous facilement à Abidjan pour découvrir notre showroom</p>
            </div>
            
            <div class="map-container">
                <!-- Carte Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254763.56700606333!2d-4.1012999192041485!3d5.348416836784972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sfr!4v1711923625517!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
            <div class="location-card">
                <div class="location-details">
                    <div>
                        <div class="location-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Adresse</h3>
                                <p>Quartier du Plateau, Rue des Jardins, Abidjan</p>
                            </div>
                        </div>
                        
                        <div class="location-detail">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Horaires d'ouverture</h3>
                                <p>Lun-Sam: 8h30-18h30 | Dim: rendez-vous </p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="location-detail">
                            <i class="fas fa-parking"></i>
                            <div>
                                <h3>Stationnement</h3>
                                <p>Parking gratuit pour nos clients</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <a href="https://www.google.com/maps/dir//Abidjan,+C%C3%B4te+d%27Ivoire" target="_blank" class="btn btn-direction">
                    <i class="fas fa-directions"></i>
                    Obtenir l'itinéraire
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-card">
                <h2>Contactez ADAM'S AUTO</h2>
                <p>Basés à Abidjan, nous sommes disponibles pour répondre à toutes vos questions sur nos services.</p>
                
                <div class="contact-links">
                    <a href="tel:0594930715" class="contact-link">
                        <i class="fas fa-phone"></i>
                        <span>05 94 93 07 15</span>
                    </a>
                    <a href="mailto:contact@adamauto.ci" class="contact-link">
                        <i class="fas fa-envelope"></i>
                        <span>contact@adamauto.ci</span>
                    </a>
                    <a href="#location" class="contact-link">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Abidjan, Côte d'Ivoire</span>
                    </a>
                </div>
                
                <div class="contact-divider"></div>
                <p>Demandez Adam's Sanogo pour un service personnalisé</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="team-header">
                <h2>Équipe Technique</h2>
                <p>expert derrière notre plateforme digitale</p>
            </div>
            
            <div class="team-card">
    <div class="avatar" style="background-color: #4a6fa5;">TRAORE LACINA</div>
    <h3>Développeur Full Stack</h3>
    <p class="specialty">Architecte de solutions numériques complètes</p>
    
    <div class="skills">
        <div class="backend">
            <h4>Backend</h4>
            <p>Systèmes performants, API robustes & sécurité</p>
        </div>
        <div class="frontend">
            <h4>Frontend</h4>
            <p>Interfaces intuitives & expérience utilisateur</p>
        </div>
    </div>
    
    <div class="team-icons">
        <!-- Backend Technologies -->
        <i class="fab fa-laravel" title="Laravel"></i>
        <i class="fas fa-database" title="Bases de données"></i>
        <i class="fab fa-node-js" title="Node.js"></i>
        
        <!-- Frontend Technologies -->
        <i class="fab fa-react" title="React"></i>
        <i class="fab fa-vuejs" title="Vue.js"></i>
        <i class="fab fa-js-square" title="JavaScript"></i>
    </div>
    
    <div class="contact-link">
        <a href="https://www.linkedin.com/in/lacina-traore-8a850b29b/" class="btn-ghost">linkedin</a>
    </div>
</div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 ADAM'S AUTO SERVICES - Le Royaume des véhicules en Côte d'Ivoire</p>
        </div>
    </footer>

    <script>
        // Ce script permet de faire défiler en douceur vers les sections lors du clic sur les liens
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>