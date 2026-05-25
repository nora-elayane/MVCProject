<?php
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
    echo "hello u diiid iit" ; 
}elseif($action === "register"){
    $uth->register() ; 
}elseif($action === "showRegister"){
    $uth->showRegisterForm() ;
}

?>