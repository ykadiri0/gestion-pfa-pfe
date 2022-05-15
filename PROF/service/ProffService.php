<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:../form3.php");
}


?>
<?php

include_once RACINE . '/classes/Proff1.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class EtudiantService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO Sjts(`id`, `libelle`, `filiere`, `niveau`, `Professeur`, `description`) "
                . "VALUES (NULL, '" . $o->getLibelle() . "', '" . $o->getFiliere() . "', '" . $o->getNiveau() . "', '" . $_SESSION['nom'] . "','".$o->getDescription()."');";
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
        $query = "select * from AffFiliere where niveau='".$niveau."' and Professeur='Assad'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);     
    }
    public function findEtudiantsByNiveau($niveau) {
        $etds = array();
        $query = "select * from AffFiliere where niveau='".$niveau."' and Professeur='Assad'";
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
        $query = "select * from AffFiliere";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
}

}

