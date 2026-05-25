<?php
session_start() ; 
require_once "app/controllers/AuthController.php";

$action = isset($_GET["action"]) ? $_GET["action"] :'login' ;
$uth = new AutoController();
if($action == "login"){
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $uth->login(); 
    }else{
        $uth->showLoginForm();
    }
}elseif ($action == "dashboard") {
    if(!isset($_SESSION["user_id"])){
        header("Location:index.php?action=login&error=Veuillez vous connecterd'abord");
        exit() ; 
    }
    require_once "app/views/dashboard.php" ;  
}elseif($action === "register"){
    $uth->register() ; 
}elseif($action === "showRegister"){
    $uth->showRegisterForm() ;
}elseif($action === "logout"){
    $uth->logout() ;
}

?>