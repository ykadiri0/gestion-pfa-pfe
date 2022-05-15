<?php
$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT concat(prenom,' ',nom) y FROM `etudiant`where filiere='".$_GET["filiere"]."';");
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
echo json_encode($data);
exit();