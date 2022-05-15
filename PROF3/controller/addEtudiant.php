<?php
include_once '../racine.php';
include_once RACINE.'/service/ProffService.php';
extract($_GET);
$es = new EtudiantService();

    $es->create(new Sujet(1, $libelle, $filiere, $niveau, $Professeur,$description));


header("location:../AjoutSjts.php");
