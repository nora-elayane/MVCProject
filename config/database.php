<?php
class DataBase{
    private $pdo ; 
    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=mvc_project_db;charset=utf8" , "root" , "") ;
        } catch (PDOException $e) {
            echo "Problem de connexion avec ase de données" . $e->getMessage() ;
        }
    }
    public function getConnection(){
        return $this->pdo ;
    }

}

?>