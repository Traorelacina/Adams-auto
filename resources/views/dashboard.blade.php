<x-app-layout>
    <x-slot name="header">
        <div class="header-container">
            <h2 class="header-title">
                {{ __('Dashboard') }}
            </h2>
            <div class="greeting">
                @php
                    $hour = date('H');
                    $greeting = '';
                    
                    if ($hour >= 5 && $hour < 12) {
                        $greeting = 'Bonjour';
                    } elseif ($hour >= 12 && $hour < 18) {
                        $greeting = 'Bon après-midi';
                    } else {
                        $greeting = 'Bonsoir';
                    }
                @endphp
                <span class="greeting-text">{{ $greeting }}, <span class="user-name">{{ Auth::user()->name }}</span></span>
                <span class="greeting-emoji">👋</span>
            </div>
        </div>
    </x-slot>

    <div class="dashboard-container">
        <!-- Statistiques rapides -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-content">
                    <div class="stat-icon stat-icon-green">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="stat-label">Voitures à vendre</div>
                        <div class="stat-value">{{ App\Models\Car::where('type', 'vente')->count() }}</div>
                    </div>
                </div>
                <div class="stat-footer">
                    <div class="stat-trend stat-trend-up">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                       
                    </div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-content">
                    <div class="stat-icon stat-icon-blue">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="stat-label">Voitures en location</div>
                        <div class="stat-value">{{ App\Models\Car::where('type', 'location')->count() }}</div>
                    </div>
                </div>
                <div class="stat-footer">
                    <div class="stat-trend stat-trend-up">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                     
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section des voitures à vendre -->
        <div class="cars-section cars-section-sale">
            <div class="section-header">
                <h2 class="section-title">
                    <span class="section-marker section-marker-green"></span>
                    Voitures à Vendre
                </h2>
            </div>
            <div class="section-content">
                <livewire:cars-for-sale />
            </div>
        </div>
        
        <!-- Section des voitures à louer -->
        <div class="cars-section cars-section-rent">
            <div class="section-header">
                <h2 class="section-title">
                    <span class="section-marker section-marker-blue"></span>
                    Voitures en Location
                </h2>
                
            </div>
            <div class="section-content">
                <livewire:cars-for-rent />
            </div>
        </div>
    </div>

    <style>
        /* Styles généraux */
        :root {
            --color-green-primary: #10b981;
            --color-green-secondary: #d1fae5;
            --color-green-dark: #065f46;
            --color-blue-primary: #3b82f6;
            --color-blue-secondary: #dbeafe;
            --color-blue-dark: #1e40af;
            --color-purple-primary: #8b5cf6;
            --color-purple-secondary: #ede9fe;
            --color-purple-dark: #6d28d9;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --border-radius-sm: 0.375rem;
            --border-radius-md: 0.5rem;
            --border-radius-lg: 0.75rem;
            --transition-regular: all 0.3s ease;
        }

        body {
            background-color: #f9fafb;
            color: #1f2937;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 16px; /* Augmentation du padding top de 24px à 40px */
            margin-top: 20px; /* Ajout d'une marge supplémentaire en haut */
        }

        /* Header styles */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 10px; /* Ajout d'une marge sous le header */
        }
        
        .header-title {
            font-size: 24px;
            font-weight: 700;
            color: #111827;
            letter-spacing: -0.025em;
        }
        
        .greeting {
            display: flex;
            align-items: center;
            color: #4b5563;
            font-weight: 500;
        }

        .greeting-text {
            margin-right: 8px;
        }

        .user-name {
            color: #111827;
            font-weight: 600;
        }

        .greeting-emoji {
            font-size: 18px;
            animation: wave 2s ease-in-out infinite;
            transform-origin: 70% 70%;
            display: inline-block;
        }

        @keyframes wave {
            0% { transform: rotate(0deg); }
            10% { transform: rotate(14deg); }
            20% { transform: rotate(-8deg); }
            30% { transform: rotate(14deg); }
            40% { transform: rotate(-4deg); }
            50% { transform: rotate(10deg); }
            60% { transform: rotate(0deg); }
            100% { transform: rotate(0deg); }
        }

        /* Stats styles */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 24px;
            margin-bottom: 32px;
            margin-top: 20px; /* Ajout d'une marge au-dessus des statistiques */
        }
        
        @media (min-width: 768px) {
            .stats-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        .stat-card {
            background-color: white;
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: var(--transition-regular);
            opacity: 0;
            transform: translateY(16px);
        }
        
        .stat-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: var(--shadow-lg);
        }
        
        .stat-content {
            display: flex;
            align-items: center;
            padding: 24px;
        }

        .stat-footer {
            padding: 12px 24px;
            background-color: #f9fafb;
            border-top: 1px solid #f3f4f6;
            font-size: 14px;
        }
        
        .stat-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            transition: var(--transition-regular);
        }
        
        .stat-card:hover .stat-icon {
            transform: scale(1.1);
        }
        
        .stat-icon-green {
            background-color: var(--color-green-secondary);
            color: var(--color-green-primary);
        }
        
        .stat-icon-blue {
            background-color: var(--color-blue-secondary);
            color: var(--color-blue-primary);
        }
        
        .stat-icon-purple {
            background-color: var(--color-purple-secondary);
            color: var(--color-purple-primary);
        }
        
        .stat-info {
            flex: 1;
        }
        
        .stat-label {
            font-size: 14px;
            font-weight: 500;
            color: #6b7280;
            margin-bottom: 4px;
        }
        
        .stat-value {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.025em;
        }

        .stat-trend {
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .stat-trend svg {
            margin-right: 6px;
        }

        .stat-trend-up {
            color: #10b981;
        }

        .stat-trend-down {
            color: #ef4444;
        }

        /* Cars sections */
        .cars-section {
            border-radius: var(--border-radius-lg);
            padding: 24px;
            margin-bottom: 40px;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(0, 0, 0, 0.05);
            opacity: 0;
            transform: translateY(16px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        
        .cars-section-sale {
            background: linear-gradient(120deg, #f0fdf4, #dcfce7);
        }
        
        .cars-section-rent {
            background: linear-gradient(120deg, #eff6ff, #dbeafe);
        }
        
        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
            letter-spacing: -0.025em;
        }
        
        .section-marker {
            display: inline-block;
            width: 4px;
            height: 24px;
            margin-right: 12px;
            border-radius: 2px;
        }
        
        .section-marker-green {
            background-color: var(--color-green-dark);
            box-shadow: 0 0 8px rgba(16, 185, 129, 0.5);
        }
        
        .section-marker-blue {
            background-color: var(--color-blue-dark);
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.5);
        }
        
        .cars-section-sale .section-title {
            color: var(--color-green-dark);
        }
        
        .cars-section-rent .section-title {
            color: var(--color-blue-dark);
        }
        
        .view-all {
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 14px;
            transition: var(--transition-regular);
            padding: 6px 12px;
            border-radius: var(--border-radius-sm);
        }
        
        .view-all svg {
            margin-left: 4px;
            transition: var(--transition-regular);
        }
        
        .view-all:hover svg {
            transform: translateX(4px);
        }
        
        .view-all-green {
            color: var(--color-green-primary);
            background-color: rgba(16, 185, 129, 0.1);
        }
        
        .view-all-green:hover {
            color: var(--color-green-dark);
            background-color: rgba(16, 185, 129, 0.2);
        }
        
        .view-all-blue {
            color: var(--color-blue-primary);
            background-color: rgba(59, 130, 246, 0.1);
        }
        
        .view-all-blue:hover {
            color: var(--color-blue-dark);
            background-color: rgba(59, 130, 246, 0.2);
        }
        
        .section-content {
            background-color: white;
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-md);
            padding: 20px;
        }

        /* Animation styles */
        .fade-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation au défilement
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        setTimeout(() => {
                            entry.target.style.transition = "all 0.3s ease";
                        }, 700);
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.cars-section').forEach(el => {
                observer.observe(el);
            });

            // Animation des cartes statistiques
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.transform = "translateY(0)";
                    card.style.opacity = "1";
                }, 100 * index);
            });
        });
    </script>
</x-app-layout>