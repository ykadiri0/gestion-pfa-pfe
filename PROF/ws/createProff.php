<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/ProffService.php';
    create();
}

function create() {
    extract($_POST);
    $es = new EtudiantService();
    $es->create(new Sujet(1, $libelle, $filiere, $niveau, $Professeur,$description));
    
    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}
