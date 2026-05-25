<?php
class AutoController{
    public function showLoginForm(){
        require_once "app/views/login.php" ; 
    }
    public function showRegisterForm(){
        require_once "app/views/inscription.php" ; 
    }
    public function register(){
         if($_SERVER["REQUEST_METHOD"] === "POST"){
            require_once "config/database.php" ; 
            require_once "app/models/Utilisateur.php" ;
            $database = new DataBase();
            $db = $database->getConnection();
            $utl = new Utilisateur($db) ;
            $nom = $_POST["nom"] ; 
            $email = $_POST["email"] ; 
            $pass = $_POST["pass"] ;
            if($utl->createUser($nom , $email , $pass)){
                header("Location:index.php?action=login&success=Compte créé avec succès");
                exit();
            }else{
               echo "Erreur lors de l'inscription" ;
            }
        }
    }
    public function login(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
        require_once "config/database.php" ; 
        require_once "app/models/Utilisateur.php" ;
        $database = new DataBase();
        $db = $database->getConnection();
        $utl = new Utilisateur($db) ;
        $log = $utl->login($_POST["email"]) ;
        if($log && password_verify($_POST["pass"] , $log["motdepasse"] )){
            header("Location:index.php?action=dashboard") ;
            exit() ;
        }else{
            header("Location:index.php?action=login&error=Email ou ot de passe Incorrect !") ; 
            exit();
        }
    }
    }
}


?>