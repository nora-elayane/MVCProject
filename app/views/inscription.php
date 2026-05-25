<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - MVC Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .register-card { max-width: 420px; width: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 10px; }
    </style>
</head>
<body>

<div class="card register-card p-4 bg-white">
    <div class="text-center mb-4">
        <h2 class="text-success fw-bold"><i class="bi bi-person-plus"></i> Inscription</h2>
        <p class="text-muted">Créer un nouveau compte administrateur</p>
    </div>

    <form action="index.php?action=register" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom Complet</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Ex: Nora El" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="nora@example.com" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="pass" class="form-label">Mot de passe</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="••••••••" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success w-100 mb-3">S'inscrire</button>
    </form>

    <div class="text-center">
        <a href="index.php?action=login" class="text-decoration-none fs-7 text-success">Déjà inscrit ? Se connecter</a>
    </div>
</div>

</body>
</html>