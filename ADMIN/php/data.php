<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
if ($_GET["niveau"] == 'aucun') {
    $result = mysqli_query($conn, "SELECT * FROM `afffiliere` WHERE filiere='" . $_GET["filiere"] . "'; ");
} else {
    $result = mysqli_query($conn, "SELECT * FROM `afffiliere` WHERE filiere='" . $_GET["filiere"] . "' AND niveau='" . $_GET["niveau"] . "'; ");
}
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);
