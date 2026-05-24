<?php 
class Utilisateur{
    private $conn ; 
    private $table_name ; 
    public function __construct($db){
        $this->conn = $db ; 
    }
    public function getAllUsers(){
        $stm = $this->conn->query("SELECT * FROM utilisateur") ;
        return $stm->fetchAll(PDO::FETCH_ASSOC) ;
    }
    public function login($email){
        $stm =  $this->conn->prepare("SELECT * FROM utilisateur WHERE email = ? ") ;
        $stm->execute([$email]) ; 
        return $stm->fetch(PDO::FETCH_ASSOC) ;
    }
    //	id_user	nom_complet	email	motdepasse	
    public function createUser($nom , $email , $motpasse){
            $motpasse = password_hash($motpasse , PASSWORD_DEFAULT) ; 
            $stm = $this->conn->prepare("INSERT INTO utilisateur ( nom_complet ,email ,	motdepasse) VALUES(? , ? , ?)");
            return $stm->execute([$nom , $email , $motpasse]) ;
    }
    public function getUserById($id){
        $stm = $this->conn->prepare("SELECT * FROM utilisateur WHERE id_user = ?") ;
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC) ;
    }
    public function modifyUser($id , $nom , $email , $motpasse){
            $stm = $this->conn->prepare("UPDATE utilisateur SET (nom_complet=? , 	email=? , 	motdepasse=?) WHERE id_user = ? ") ; 
            return $stm->execute([$nom , $email , $motpasse ,$id]);
    }
    public function deleteUser($id){
        $stm = $this->conn->prepare("DELETE FROM utilisateur WHERE id_user = ?") ; 
        return $stm->execute([$id]) ; 
    }
}




?>