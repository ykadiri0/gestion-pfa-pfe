<?php

class Sujet{

    private $id;
    private $libelle;
    private $filiere;
    private $niveau;
    private $Professeur;
    private $description;
    public function __construct($id, $libelle, $filiere, $niveau, $Professeur, $description) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->filiere = $filiere;
        $this->niveau = $niveau;
        $this->Professeur = $Professeur;
        $this->description = $description;
    }
    public function getId() {
        return $this->id;
    }

    public function getLibelle() {
        return $this->libelle;
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

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
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

    public function setDescription($description) {
        $this->description = $description;
    }


    

}
    