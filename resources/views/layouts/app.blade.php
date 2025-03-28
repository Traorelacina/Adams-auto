
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ADAMO AUTO') }}</title>
        @livewireStyles

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Custom Styles -->
        <style>
            /* Navigation Styles */
            .navbar {
                background-color: var(--white);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
                padding: 15px 0;
            }
            
            .nav-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 90%;
                max-width: 1200px;
                margin: 0 auto;
            }
            
            .logo {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 1.8rem;
                color: var(--primary-blue);
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

            .hamburger {
    display: none;
    font-size: 1.5rem;
    background: none;
    border: none;
    cursor: pointer;
    color: #333;
}

@media (max-width: 768px) {
    .hamburger {
        display: block;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 0;
        background-color: var(--white);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        text-align: center;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links li {
        margin: 15px 0;
    }
}


            /* Footer Styles */
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

            /* Other root variables and styles from the original file */
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
        </style>
    </head>
    <body class="font-sans antialiased">
        @livewireScripts
        <div class="min-h-screen bg-gray-100">
            <!-- Navigation -->
            <nav class="navbar">
    <div class="container nav-container">
        <a href="{{ route('dashboard') }}" class="logo">ADAMO <span>AUTO</span></a>
        <button class="hamburger" id="hamburger-menu">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-links" id="nav-links">
            <li><a href="{{ route('dashboard') }}">Accueil</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#cars">Véhicules</a></li>
            <li><a href="#contact" class="contact-btn">Contact</a></li>
            @auth
                <li><a href="{{ route('profile.edit') }}">Profil</a></li>
            @else
                <li><a href="{{ route('login') }}">Connexion</a></li>
                <li><a href="{{ route('register') }}">Inscription</a></li>
            @endauth
        </ul>
    </div>
</nav>


            <!-- Page Content -->
            <main class="mt-[70px]">
                {{ $slot }}
            </main>

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
                                <li><a href="{{ route('dashboard') }}">Accueil</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#cars">Véhicules</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h3>Services</h3>
                            <ul class="footer-links">
                                <li><a href="{{ route('cars.for-sale') }}">Achat de voitures</a></li>
                                <li><a href="{{ route('cars.for-rent') }}">Location de voitures</a></li>
                                <li><a href="#">Entretien & Réparation</a></li>
                                <li><a href="#">Financement</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <p>&copy; {{ date('Y') }} ADAMO AUTO-SERVICE BUSINESS. Tous droits réservés.</p>
                    </div>
                </div>
            </footer>
        </div>

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


        document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger-menu');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
});

        </script>
    </body>
</html>
