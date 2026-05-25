<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Creer un Compte</h2>
    <form action="index.php?action=register" method="post">
        <label for="nom">Nom Complet : </label>
        <input type="text" name="nom" required> <br> <br>
        <label for="email">Email : </label>
        <input type="email" name="email" required> <br> <br>
        <label for="pass">Mot de passe : </label>
        <input type="password" name="pass" required> <br> <br>
        <button type="submit">S'inscrire</button>
    </form>
    <a href="index.php?action=login">Déja inscrit ? se Connecter</a>
</body>
</html>
