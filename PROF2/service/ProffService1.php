
<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:../form3.php");
    $sql="select * from professeur  where email='".$username."' ";

    $result=mysqli_query($data,$sql);

    $rows= mysqli_fetch_assoc($result);
    $_SESSION['id']=$rows['id'];
    $_SESSION["username"]=$username;
    $_SESSION["prenom"]=$rows['prenom'];
    $_SESSION['nom']=$rows['nom'];
    $_SESSION['telephone']=$rows['telephone'];
    $_SESSION['CIN']=$rows['CIN'];
}


?>
<?php

include_once RACINE . '/classes/Proff2.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class ProffService1 implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO `tachepfa`(`id`, `sjts`, `tache1`, `description1`, `tache2`, `description2`, `tache3`, `description3`, `deadline`)"
        . "VALUES (NULL, '" . $o->getSjts() . "', '" . $o->getTache1() . "','".$o->getDescription1()."', '" . $o->getTache2() . "','".$o->getDescription2()."', '" . $o->getTache3() . "','".$o->getDescription3()."', '" . $o->getDeadline() . "');";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from Etudiant where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "SELECT * FROM `AffFiliere`";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Sujet1($e->id, $e->Mbr1, $e->id1, $e->Mbr2, $e->id2,$e->Mbr3, $e->id3, $e->filiere, $e->niveau, $e->Professeur);
        }
        return $etds;
    }   
    
    public function findEtudiantsByNiveauApi ($niveau){ 
        $etds = array();
        $query = "select * from AffFiliere where niveau='".$niveau."' and Professeur='".$_SESSION['nom']." ".$_SESSION['prenom']."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);     
    }
    public function findEtudiantsByNiveau($niveau) {
        $etds = array();
        $query = "select * from AffFiliere where niveau='".$niveau."' and Professeur='".$_SESSION['nom']." ".$_SESSION['prenom']."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Sujet1($e->id, $e->Mbr1, $e->id1, $e->Mbr2, $e->id2,$e->Mbr3, $e->id3, $e->filiere, $e->niveau, $e->Professeur);
        }
        return $etds;
    }
    public function findNiveau() {
        $niveau = array();
        $query = "select distinct(niveau) as niveau from AffFiliere ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($n = $req->fetch(PDO::FETCH_OBJ)) {
            $niveau[] = $n->niveau;
        }
        return $niveau;
    }
    

     public function findNiveauApi() {
        $niveau = array();
        $query = "select distinct(niveau) as niveau from AffFiliere ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
       
        return $req->fetchAll(PDO::FETCH_ASSOC);
     }
                
       
    
    public function findById($id) {
        $query = "select * from AffFiliere where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd =new Sujet1($e->id, $e->Mbr1, $e->id1, $e->Mbr2, $e->id2,$e->Mbr3, $e->id3, $e->filiere, $e->niveau, $e->Professeur);
        }
        return $etd;
    }

    public function update($o) {
        $query = "UPDATE `etudiant` SET `nom` = '" . $o->getNom() . "', `prenom` = '" . $o->getPrenom() . "', `ville` = '" . $o->getVille() . "', `sexe` = '" . $o->getSexe() . "' WHERE `etudiant`.`id` = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
    
    public function findAllApi() {
        $query = "select * from sjts";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
}

}

