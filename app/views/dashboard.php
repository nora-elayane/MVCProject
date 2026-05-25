<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mon Projet MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #212529; color: white; }
        .sidebar a { color: #adb5bd; text-decoration: none; }
        .sidebar a:hover { color: white; background-color: #343a40; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar p-3 d-flex flex-column">
            <h4 class="text-center mb-4 text-primary"><i class="bi bi-code-slash"></i> MVC App</h4>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-2">
                    <a href="index.php?action=dashboard" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="bi bi-people me-2"></i> Utilisateurs</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Paramètres</a>
                </li>
            </ul>
            <hr>
            <a href="index.php?action=logout" class="btn btn-danger w-100"><i class="bi bi-box-arrow-right me-2"></i> Déconnexion</a>
        </div>

        <div class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                <h2>Tableau de bord</h2>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-2"></i><?php echo $_SESSION['user_nom']; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-menu-item p-2 text-dark text-decoration-none d-block" href="index.php?action=logout">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                <div>
                    Bienvenue <strong><?php echo $_SESSION['user_nom']; ?></strong> ! Vous êtes connecté avec succès. (u diiid iit!)
                </div>
            </div>

            <div class="row g-3 mt-2">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Utilisateurs</h5>
                                <p class="card-text fs-3 fw-bold">1</p>
                            </div>
                            <i class="bi bi-people fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Statut Serveur</h5>
                                <p class="card-text fs-5 fw-bold">En ligne</p>
                            </div>
                            <i class="bi bi-cpu fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Sessions Actives</h5>
                                <p class="card-text fs-3 fw-bold">1</p>
                            </div>
                            <i class="bi bi-shield-check fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>