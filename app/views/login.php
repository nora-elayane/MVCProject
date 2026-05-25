<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MVC Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-card { max-width: 400px; width: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 10px; }
    </style>
</head>
<body>

<div class="card login-card p-4 bg-white">
    <div class="text-center mb-4">
        <h2 class="text-primary fw-bold"><i class="bi bi-shield-lock"></i> Connexion</h2>
        <p class="text-muted">Accéder à votre tableau de bord</p>
    </div>

    <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger p-2 fs-7" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['success'])): ?>
        <div class="alert alert-success p-2 fs-7" role="alert">
            <i class="bi bi-check-circle-fill me-1"></i> <?php echo htmlspecialchars($_GET['success']); ?>
        </div>
    <?php endif; ?>

    <form action="index.php?action=login" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="nom@example.com" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="pass" class="form-label">Mot de passe</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="••••••••" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3">Connexion</button>
    </form>

    <div class="text-center">
        <a href="index.php?action=showRegister" class="text-decoration-none fs-7">Pas encore de compte ? S'inscrire</a>
    </div>
</div>

</body>
</html>