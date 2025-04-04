<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès refusé</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3490dc;
            --danger-color: #e3342f;
            --light-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
        }
        
        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .content-wrapper {
            min-height: calc(100vh - 160px);
            padding: 2rem 0;
        }
        
        .error-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .error-icon {
            font-size: 5rem;
            color: var(--danger-color);
        }
        
        .btn-return {
            background-color: var(--primary-color);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.25s ease;
        }
        
        .btn-return:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 144, 220, 0.3);
        }
        
        footer {
            background-color: var(--light-bg);
            padding: 1rem 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
  

    <!-- Content -->
    <main class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="error-card">
                        <div class="p-5 text-center">
                            <div class="mb-4">
                                <span class="error-icon">🚫</span>
                            </div>
                            <h1 class="fw-bold text-danger mb-4">Accès refusé</h1>
                            <div class="alert alert-light border p-4 mb-4">
                                <p class="mb-0 fs-5">Vous n'avez pas les autorisations nécessaires pour accéder à cette page.</p>
                            </div>
                            <a href="/" class="btn btn-return">
                                <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                            </a>
                        </div>
                        <div class="bg-light text-center p-3">
                            <p class="text-muted mb-0">Si vous pensez qu'il s'agit d'une erreur, veuillez contacter l'administrateur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-muted">
        <div class="container">
            <p class="mb-0">&copy; 2025 Mon Application. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>