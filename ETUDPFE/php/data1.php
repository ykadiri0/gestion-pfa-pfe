<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:../form3.php");
}

$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT dossier1, dossier2 , dossier3, etat1, etat2, etat3 FROM `dossierpfe` WHERE nom='" .$_SESSION["nom"]. "'; ");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);