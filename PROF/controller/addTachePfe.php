<?php
include_once '../racine.php';
include_once RACINE.'/service/ProffService2.php';
extract($_GET);
$es = new ProffService2();

    $es->create(new Sujet(1, $entreprise, $tache1, $description1, $tache2, $description2, $tache3, $description3,$deadline));


header("location:../RendzVous.php");
   