<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_GET['nf'];

$sql="INSERT INTO `filiere`(`id`, `libelle`) VALUES (null,'".$nom."')";

$RESULT=mysqli_query($conn,$sql);

header("location: ../filiere.php");