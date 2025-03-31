<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADAMO AUTO-SERVICE BUSINESS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#1A5F7A',
                        'secondary-blue': '#57C5B6',
                        'primary-green': '#2D9E6F',
                        'accent-orange': '#FF6B35'
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-blue to-secondary-blue text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">ADAMO AUTO-SERVICE BUSINESS</h1>
            <p class="text-xl md:text-2xl mb-8">Royaume des véhicules en Côte d'Ivoire</p>
            <div class="flex justify-center space-x-4">
                <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full">Achats de voitures</span>
                <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full">Location</span>
                <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full">Import/Export</span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-6xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-accent-orange">
                    <h2 class="text-3xl font-bold text-primary-blue mb-6">Notre Histoire</h2>
                    <p class="mb-6 text-gray-700">ADAMO AUTO-SERVICE BUSINESS s'est imposé comme le leader incontesté du marché automobile en Côte d'Ivoire. Fondée par Adam's Sanogo, notre entreprise allie expertise locale et vision internationale.</p>
                    <p class="text-gray-700">Nous nous engageons à fournir des véhicules de qualité et un service personnalisé à chacun de nos clients, avec une transparence absolue dans toutes nos transactions.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-accent-orange">
                    <h2 class="text-3xl font-bold text-primary-blue mb-6">Nos Services</h2>
                    <ul class="space-y-5">
                        <li class="flex items-start">
                            <i class="fas fa-car text-accent-orange bg-orange-50 p-3 rounded-full mr-4"></i>
                            <div>
                                <h3 class="font-semibold text-lg">Achat/Vente de véhicules</h3>
                                <p class="text-gray-600">Neufs et d'occasion, toutes marques</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-key text-accent-orange bg-orange-50 p-3 rounded-full mr-4"></i>
                            <div>
                                <h3 class="font-semibold text-lg">Location flexible</h3>
                                <p class="text-gray-600">Court et long terme, tous budgets</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-globe text-accent-orange bg-orange-50 p-3 rounded-full mr-4"></i>
                            <div>
                                <h3 class="font-semibold text-lg">Réseau international</h3>
                                <p class="text-gray-600">Import/Export vers toute l'Afrique de l'Ouest</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Import/Export Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-primary-blue mb-4">Notre Réseau International</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Connectés avec les principaux marchés automobiles d'Afrique de l'Ouest</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-lg shadow-md p-8 text-center hover:shadow-lg transition-all transform hover:-translate-y-2">
                    <i class="fas fa-map-marked-alt text-primary-green text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary-blue">Abidjan - Lomé</h3>
                    <p class="text-gray-600">Importation directe depuis le Togo</p>
                    <div class="mt-4 text-sm text-accent-orange font-medium">
                        <i class="fas fa-arrow-right mr-2"></i> Voitures européennes
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-8 text-center hover:shadow-lg transition-all transform hover:-translate-y-2">
                    <i class="fas fa-ship text-primary-green text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary-blue">Abidjan - Cotonou</h3>
                    <p class="text-gray-600">Réseau établi avec le Bénin</p>
                    <div class="mt-4 text-sm text-accent-orange font-medium">
                        <i class="fas fa-arrow-right mr-2"></i> Véhicules asiatiques
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-8 text-center hover:shadow-lg transition-all transform hover:-translate-y-2">
                    <i class="fas fa-truck text-primary-green text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2 text-primary-blue">Abidjan - Burkina</h3>
                    <p class="text-gray-600">Exportation vers le Burkina Faso</p>
                    <div class="mt-4 text-sm text-accent-orange font-medium">
                        <i class="fas fa-arrow-right mr-2"></i> 4x4 et utilitaires
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 text-center">
                <h2 class="text-3xl font-bold text-primary-blue mb-6">Contactez ADAMO AUTO</h2>
                <p class="mb-8 text-gray-600 max-w-2xl mx-auto">Basés à Abidjan, nous sommes disponibles pour répondre à toutes vos questions sur nos services.</p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:0594930715" class="bg-gray-100 text-primary-blue px-4 py-2 rounded-full hover:bg-primary-blue hover:text-white transition-colors flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        <span>05 94 93 07 15</span>
                    </a>
                    <a href="mailto:contact@adamauto.ci" class="bg-gray-100 text-primary-blue px-4 py-2 rounded-full hover:bg-primary-blue hover:text-white transition-colors flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>contact@adamauto.ci</span>
                    </a>
                    <div class="bg-gray-100 text-primary-blue px-4 py-2 rounded-full flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Abidjan, Côte d'Ivoire</span>
                    </div>
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <p class="text-gray-500">Demandez Adam's Sanogo pour un service personnalisé</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Team Section -->
    <section class="bg-gradient-to-r from-primary-blue to-primary-green text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Équipe Technique</h2>
                <p class="text-white text-opacity-80 max-w-2xl mx-auto">Les experts derrière notre plateforme digitale</p>
            </div>
            
           
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-lg p-8 text-center hover:bg-opacity-20 transition-all transform hover:-translate-y-2">
                    <div class="w-24 h-24 bg-white text-primary-blue rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">BD</div>
                    <h3 class="text-xl font-bold mb-2">Développeur Backend</h3>
                    <p class="text-white text-opacity-80">Systèmes performants et sécurisés</p>
                    <div class="mt-4 flex justify-center space-x-3 text-white text-opacity-60">
                        <i class="fab fa-laravel"></i>
                        <i class="fas fa-database"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>