<?php
class AutoController{
    public function showLoginForm(){
        require_once "app/views/login.php" ; 
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