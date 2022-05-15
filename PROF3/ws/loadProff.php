<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/ProffService.php';
    loadAll();
}

function loadAll() {
    $es = new EtudiantService();

    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}

     
