<x-guest-layout>
    <div class="register-container">
        <div class="register-card">
            <!-- En-tête avec logo et titre -->
            <div class="card-header">
                <h1>{{ __('Créer un compte') }}</h1>
                <p>Rejoignez Adam's Auto</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <!-- Name input -->
                <div class="form-group">
                    <label for="name">
                        {{ __('Nom complet') }}
                    </label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </span>
                        <input 
                            id="name" 
                            type="text" 
                            name="name" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus 
                            autocomplete="name"
                            placeholder="Jean Dupont"
                        />
                        @error('name')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-group">
                    <label for="email">
                        {{ __('Email') }}
                    </label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="username"
                            placeholder="exemple@email.com"
                        />
                        @error('email')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label for="password">
                        {{ __('Mot de passe') }}
                    </label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </span>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="new-password"
                            placeholder="••••••••"
                        />
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Confirm password input -->
                <div class="form-group">
                    <label for="password_confirmation">
                        {{ __('Confirmer le mot de passe') }}
                    </label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <input 
                            id="password_confirmation" 
                            type="password" 
                            name="password_confirmation" 
                            required 
                            autocomplete="new-password"
                            placeholder="••••••••"
                        />
                        @error('password_confirmation')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Register button -->
                <div class="button-container">
                    <button type="submit" class="register-button">
                        {{ __('S\'inscrire') }}
                    </button>
                </div>
            </form>

            <!-- Login link -->
            <div class="card-footer">
                <p>
                    {{ __('Déjà inscrit ?') }}
                    <a href="{{ route('login') }}">
                        {{ __('Se connecter') }}
                    </a>
                </p>
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 Adam's Auto. Tous droits réservés.
        </div>
    </div>

    <style>
        /* Variables CSS pour les couleurs */
        :root {
            --primary-color: #10b981; /* émeraude */
            --secondary-color: #2563eb; /* bleu */
            --gradient-start: var(--primary-color);
            --gradient-end: var(--secondary-color);
            --light-bg: #f0f9ff;
            --white: #ffffff;
            --text-dark: #333333;
            --text-light: #666666;
            --border-color: #e5e7eb;
            --error-color: #ef4444;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        /* Styles généraux */
        .register-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e6f7ff 0%, #e6fffa 100%);
            padding: 1rem;
        }

        .register-card {
            width: 100%;
            max-width: 420px;
            background-color: var(--white);
            box-shadow: 0 4px 12px var(--shadow-color);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        /* En-tête de la carte */
        .card-header {
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            padding: 2rem;
            text-align: center;
        }

        .card-header h1 {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--white);
            margin: 0;
        }

        .card-header p {
            color: rgba(255, 255, 255, 0.9);
            margin-top: 0.5rem;
        }

        /* Formulaire */
        .register-form {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .input-container {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }

        .input-container input {
            width: 100%;
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: 0 1px 2px var(--shadow-color);
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .input-container input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
        }

        .input-container input::placeholder {
            color: #9ca3af;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        /* Bouton d'inscription */
        .button-container {
            margin-top: 1rem;
        }

        .register-button {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 0.75rem 1rem;
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .register-button:hover {
            background: linear-gradient(to right, #0da271, #1e56c2);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        }

        .register-button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.3);
        }

        /* Pied de la carte */
        .card-footer {
            padding: 1.5rem 2rem 2rem;
            text-align: center;
            border-top: 1px solid var(--border-color);
        }

        .card-footer p {
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .card-footer a {
            font-weight: 500;
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .card-footer a:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }

        /* Copyright */
        .copyright {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.75rem;
            color: var(--text-light);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .register-card {
                border-radius: 8px;
            }
            
            .register-form {
                padding: 1.5rem;
            }
            
            .card-header {
                padding: 1.5rem;
            }
        }
    </style>
</x-guest-layout>