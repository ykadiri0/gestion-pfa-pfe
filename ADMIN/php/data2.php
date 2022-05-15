<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
if ($_GET["filiere"] == 'aucun') {
    $result = mysqli_query($conn, "SELECT * FROM `etudiant`; ");
} else {
    $result = mysqli_query($conn, "SELECT * FROM `etudiant` WHERE filiere='" . $_GET["filiere"] . "'; ");
}
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);
