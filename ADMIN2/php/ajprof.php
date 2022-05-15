<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];


$sql="INSERT INTO `users`(`id`, `nom`,`prenom`, `usertype`, `email`, `psw`,`avatar`) VALUES (null,'".$nom."','".$prenom."','prof','".$email."','1234','default-avatar.png');";

$RESULT=mysqli_query($conn,$sql);

$sql1="INSERT INTO `professeur`(`id`, `nom`, `prenom`, `email`) VALUES (null,'".$nom."','".$prenom."','".$email."')";

$RESULT1=mysqli_query($conn,$sql1);

header("location: ../ajouterProf.php");