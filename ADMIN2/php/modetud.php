<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['email'];
$filiere=$_GET['filiere'];
$niveau=$_GET['niveau'];
$id=$_GET['id'];

$sql1="UPDATE `etudiant` SET `nom`='".$nom."',`prenom`='".$prenom."',`email`='".$email."',`niveau`='".$niveau."',`filiere`='".$filiere."' WHERE id='".$id."'";

$RESULT1=mysqli_query($conn,$sql1);

header("location: ../homeadmine.php");