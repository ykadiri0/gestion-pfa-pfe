<?php
$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT idetud, nom, prenom  FROM `dossierpfe` WHERE entreprise='".$_GET['entreprise']."'; ");
$data2 = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data2, $row);
}
echo json_encode($data2);
exit();