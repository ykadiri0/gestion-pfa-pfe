<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/ProffService2.php';
    create();
}

function create() {
    extract($_POST);
    $es = new ProffService2();
    $es->create(new Sujet(1, $entreprise, $tache1, $description1, $tache2, $description2, $tache3, $description3,$deadline));
    
    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}
