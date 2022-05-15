<?php

class Sujet{

    private $id;
    private $sjts;
    private $tache1;
    private $description1;
    private $tache2;
    private $description2;
    private $tache3;
    private $description3;
    private $deadline;
    public function __construct($id, $sjts, $tache1, $description1, $tache2, $description2, $tache3, $description3,$deadline) {
        $this->id = $id;

        $this->sjts = $sjts;
        $this->tache1 = $tache1;
        $this->description1 = $description1;
        $this->tache2 = $tache2;
        $this->description2 = $description2;
        $this->tache3 = $tache3;
        $this->description3 = $description3;
        $this->deadline = $deadline;
       
    }
    public function getId() {
        return $this->id;
    }
    


    public function getSjts() {
        return $this->sjts;
    }

    public function getTache1() {
        return $this->tache1;
    }
    public function getDescription1() {
        return $this->description1;
    }
    public function getTache2() {
        return $this->tache2;
    }
    public function getDescription2() {
        return $this->description2;
    }
    public function getTache3() {
        return $this->tache3;
    }
    public function getDescription3() {
        return $this->description3;
    }
    public function getDeadline() {
        return $this->deadline;
    }

    public function setId($id) {
        $this->id = $id;
    }
   

    public function setSjts($sjts) {
        $this->sjts = $sjts;
    }

    public function setTache1($tache1) {
        $this->tache1 = $tache1;
    }
    public function setDescription1($description1) {
        $this->description1 = $description1;
    }
    public function setTache2($tache2) {
        $this->tache2 = $tache2;
    }
    public function setDescription2($description2) {
        $this->description2= $description2;
    }

    public function setTache3($tache3) {
        $this->tache3 = $tache3;
    }
    public function setDescription3($description3) {
        $this->description3 = $description3;
    }



    public function setDeadline($deadline) {
        $this->deadline= $deadline;
    }

   

   

}



	

	

	
    