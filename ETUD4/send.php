<?php
session_start();
$pn=$_GET['pn'];

$m1=$_GET['m1'];
$m2=$_GET['m2'];
$m3=$_GET['m3'];
$F=$_GET['F'];
$P=$_GET['PQ'];
$n=$_GET['textfield'];
$e=$_GET['m1'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];
$id=$_SESSION['ide'];


$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "INSERT INTO `afffiliere`(`id`, `Mbr1`,`id1`,  `Mbr2`,`id2`,  `Mbr3`,`id3`,  `sjts`, `filiere`, `niveau`, `Professeur`) VALUES (null,'".$e."','".$id."','".$m2."','".$id2."','".$m3."','".$id3."','".$pn."','".$F."','".$n."','".$P."') ");
header("location:inscription.php");
?>

