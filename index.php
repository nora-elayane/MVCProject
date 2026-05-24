<?php
require_once "app/controllers/AuthController.php";
// require_once "config/database.php" ;
// require_once "app/models/Utilisateur.php" ;
// $db = (new DataBase())->getConnection() ; 
// $utl = new Utilisateur($db) ; 
// $utl->createUser("Nora" , "nora@gmail.com" , "123456");
if(isset($_GET["action"])){
    $action = $_GET["action"] ; 
}else{
    $action = "login" ; 
}
if($action == "login"){
    $uth = new AutoController();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $uth->login(); 
    }else{
        $uth->showLoginForm();
    }
}elseif ($action == "dashboard") {
    echo "hello u diiid iit" ; 
}

?>