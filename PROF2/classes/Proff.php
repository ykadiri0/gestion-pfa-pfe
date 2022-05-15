<?php

class Sujet1{

    private $id;
    private $Mbr1;
    private $id1;
    private $Mbr2;
    private $id2;
    private $Mbr3;
    private $id3;
    
    public function __construct($id, $Mbr1, $id1, $Mbr2, $id2, $Mbr3, $id3, $filiere, $niveau, $Professeur) {
        $this->id = $id;
        $this->Mbr1 = $Mbr1;
        $this->id1 = $id1;
        $this->Mbr2 = $Mbr2;
        $this->id2 = $id2;
        $this->Mbr3 = $Mbr3;
        $this->id3 = $id3;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
        $this->Professeur = $Professeur;
        
    }
    public function getId() {
        return $this->id;
    }

    public function getMbr1() {
        return $this->Mbr1;
    }

    public function getId1() {
        return $this->id1;
    }

    public function getMbr2() {
        return $this->Mbr2;
    }

    public function getId2() {
        return $this->id2;
    }

    public function getMbr3() {
        return $this->Mbr3;
    }

    public function getId3() {
        return $this->id3;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function getNiveau() {
        return $this->niveau;
    }

    public function getProfesseur() {
        return $this->Professeur;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMbr1($Mbr1) {
        $this->Mbr1 = $Mbr1;
    }

    public function setId1($id1) {
        $this->id1 = $id1;
    }

    public function setMbr2($Mbr2) {
        $this->Mbr2 = $Mbr2;
    }

    public function setId2($id2) {
        $this->id2 = $id2;
    }

    public function setMbr3($Mbr3) {
        $this->Mbr3 = $Mbr3;
    }

    public function setId3($id3) {
        $this->id3 = $id3;
    }

    public function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

    public function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    public function setProfesseur($Professeur) {
        $this->Professeur = $Professeur;
    }


}
    