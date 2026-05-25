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
            session_start() ; 
            $_SESSION["user_id"] = $log["id_user"];
            $_SESSION["user_nom"] = $log["nom_complet"] ; 
            $_SESSION["user_email"] = $log["email"] ; 
            header("Location:index.php?action=dashboard") ;
            exit() ;
        }else{
            header("Location:index.php?action=login&error=Email ou ot de passe Incorrect !") ; 
            exit();
        }
    }
    }
    public function logout(){
        session_start() ; 
        session_unset() ;
        session_destroy() ; 
        header("Location:index.php?action=login&success=Deconnecté avec succès");
        exit() ;
    }
}


?>