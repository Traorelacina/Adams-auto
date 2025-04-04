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

            /* Navigation Styles - Améliorée */
            .navbar {
                background-color: white;
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 50;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
                transition: all 0.3s ease;
                padding: 12px 0;
            }
            
            .navbar.scrolled {
                padding: 8px 0;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
                display: inline-block;
                max-width: 100px;
                transition: transform 0.3s ease;
            }
            
            .logo:hover {
                transform: scale(1.05);
            }
            
            .logo img {
                width: 80%;
                height: auto;
                display: block;
                max-width: 80%;
            }
            
            .nav-links {
                display: flex;
                align-items: center;
                list-style: none;
                margin: 0;
                padding: 0;
            }
            
            .nav-links li {
                margin-left: 1.5rem;
                position: relative;
            }
            
            .nav-links a, .nav-links button {
                text-decoration: none;
                color: #333333;
                font-weight: 500;
                background: transparent;
                border: 0;
                cursor: pointer;
                font-family: 'Poppins', sans-serif;
                position: relative;
                display: inline-block;
                font-size: 0.95rem;
                padding: 6px 0;
                transition: all 0.3s;
            }
            
            .nav-links a::after, .nav-links button::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: var(--primary-orange);
                transition: width 0.3s ease;
            }
            
            .nav-links a:hover::after, .nav-links button:hover::after {
                width: 100%;
            }
            
            .nav-links a:hover, .nav-links button:hover {
                color: var(--primary-orange);
            }
            
            .nav-links .contact-btn {
                border-radius: 9999px;
                background-color: var(--primary-green);
                color: white !important;
                padding: 10px 22px;
                transition: all 0.3s ease;
                box-shadow: 0 2px 10px rgba(0, 168, 107, 0.2);
            }
            
            .nav-links .contact-btn:hover {
                transform: translateY(-2px);
                background-color: var(--secondary-green);
                box-shadow: 0 4px 12px rgba(0, 168, 107, 0.3);
            }
            
            .nav-links .contact-btn::after {
                display: none;
            }

            .logout-btn {
                display: flex;
                align-items: center;
                gap: 5px;
                transition: all 0.3s ease;
            }
            
            .logout-btn:hover i {
                transform: translateX(3px);
            }
            
            .logout-btn i {
                transition: transform 0.3s ease;
            }

            .nav-active {
                position: relative;
            }
            
            .nav-active::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: var(--primary-orange);
            }

            .hamburger {
                display: none;
                font-size: 1.5rem;
                background: transparent;
                border: 0;
                cursor: pointer;
                color: #333333;
                transition: all 0.3s ease;
            }
            
            .hamburger:hover {
                color: var(--primary-orange);
            }

            /* Animation pour menu mobile */
            @keyframes slideDown {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @media (max-width: 768px) {
                .hamburger {
                    display: block;
                }

                .nav-links {
                    display: none;
                    flex-direction: column;
                    position: absolute;
                    left: 0;
                    right: 0;
                    background-color: white;
                    text-align: center;
                    width: 100%;
                    top: 70px;
                    padding: 20px 0;
                    z-index: 999;
                    border-radius: 0 0 15px 15px;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
                }

                .nav-links.active {
                    display: flex;
                    animation: slideDown 0.3s forwards;
                }

                .nav-links li {
                    margin: 0.75rem 0;
                }

                .nav-links a::after, .nav-links button::after {
                    display: none;
                }

                .nav-links .contact-btn {
                    display: inline-block;
                    margin: 0.5rem auto;
                    padding: 0.5rem 1.25rem;
                }
                
                .nav-active::before {
                    width: 30%;
                    left: 35%;
                }
            }

            /* Footer Styles */
            .footer {
                background-color: var(--primary-blue);
                color: white;
                padding-top: 4rem;
                padding-bottom: 1.25rem;
            }
            
            .footer-content {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2.5rem;
                margin-bottom: 2.5rem;
            }
            
            .footer-column h3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.25rem;
                margin-bottom: 1.25rem;
                position: relative;
                padding-bottom: 0.5rem;
            }
            
            .footer-column h3:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 3rem;
                height: 3px;
                background-color: var(--primary-orange);
            }
            
            .footer-links {
                list-style: none;
                padding: 0;
            }
            
            .footer-links li {
                margin-bottom: 0.5rem;
            }
            
            .footer-links a {
                color: #d1d5db;
                text-decoration: none;
                transition: color 0.3s;
            }
            
            .footer-links a:hover {
                color: var(--primary-orange);
            }
            
            .social-links {
                display: flex;
                margin-top: 1.25rem;
                gap: 10px;
            }
            
            .social-links a {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                border-radius: 9999px;
                background-color: rgba(255, 255, 255, 0.1);
                transition: all 0.3s;
            }
            
            .social-links a:hover {
                transform: translateY(-3px);
                background-color: var(--primary-orange);
            }
            
            .footer-bottom {
                text-align: center;
                padding-top: 1.25rem;
                font-size: 0.875rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            /* Main Content */
            .min-h-screen {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            main {
                flex: 1;
                padding-bottom: 2.5rem;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @livewireScripts
        <div class="min-h-screen bg-gray-100">
            <!-- Navigation -->
            <nav class="navbar" id="main-navbar">
                <div class="container nav-container">
                    <a href="\" class="logo">
                        <img src="{{ asset('images/logodj.jpg') }}" alt="Logo" id="nav-logo">
                    </a>
                    <button class="hamburger" id="hamburger-menu" aria-label="Menu">
                        <i class="fas fa-bars"></i>
                    </button>
                    <ul class="nav-links" id="nav-links">
                        <li><a href="\" class="{{ request()->is('/') ? 'nav-active' : '' }}">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#cars">Véhicules</a></li>
                        <li><a href="#contact" class="contact-btn">Contact</a></li>
                        <li><a href="about" class="{{ request()->is('about') ? 'nav-active' : '' }}">À propos</a></li>
                        @auth
                            <li><a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'nav-active' : '' }}">Profil</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="logout-btn">
                                        <span>Déconnexion</span> <i class="fas fa-sign-out-alt"></i>
                                    </button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'nav-active' : '' }}">Connexion</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="mt-24">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="footer-content">
                        <div class="footer-column">
                            <h3>À propos</h3>
                            <p>ADAM'S AUTO-SERVICE BUSINESS est le leader de la vente et de la location de véhicules en Côte d'Ivoire depuis 2022.</p>
                            <div class="social-links">
                                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="footer-column">
                            <h3>Liens rapides</h3>
                            <ul class="footer-links">
                                <li><a href="\">Accueil</a></li>
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
                        <p>&copy; {{ date('Y') }} ADAM'S AUTO-SERVICE BUSINESS. Tous droits réservés.</p>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Animation au scroll
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

                // Navbar shrink on scroll
                window.addEventListener('scroll', function() {
                    const navbar = document.getElementById('main-navbar');
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });

                // Menu mobile amélioré
                const hamburger = document.getElementById('hamburger-menu');
                const navLinks = document.getElementById('nav-links');

                if (hamburger && navLinks) {
                    hamburger.addEventListener('click', () => {
                        navLinks.classList.toggle('active');
                        hamburger.setAttribute('aria-expanded', navLinks.classList.contains('active'));
                        
                        // Change l'icône du hamburger
                        const icon = hamburger.querySelector('i');
                        if (navLinks.classList.contains('active')) {
                            icon.classList.remove('fa-bars');
                            icon.classList.add('fa-times');
                        } else {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    });
                }

                // Fermer le menu mobile quand on clique sur un lien
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth <= 768) {
                            navLinks.classList.remove('active');
                            hamburger.setAttribute('aria-expanded', 'false');
                            const icon = hamburger.querySelector('i');
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    });
                });

                // Fermer le menu mobile lors du clic en dehors
                document.addEventListener('click', function(event) {
                    if (window.innerWidth <= 768 && navLinks.classList.contains('active')) {
                        const isClickInside = navLinks.contains(event.target) || hamburger.contains(event.target);
                        if (!isClickInside) {
                            navLinks.classList.remove('active');
                            hamburger.setAttribute('aria-expanded', 'false');
                            const icon = hamburger.querySelector('i');
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                });

                function checkAuth(event, element) {
                    const isAuthenticated = element.getAttribute('data-authenticated') === 'true';

                    if (!isAuthenticated) {
                        event.preventDefault();
                        alert("Vous devez être connecté pour accéder à cette section.");
                        window.location.href = "{{ route('login') }}";
                    }
                }
            });
        </script>
    </body>
</html>