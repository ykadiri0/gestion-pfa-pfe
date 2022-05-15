<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$filiere=$_POST['filiere'];
$niveau=$_POST['niveau'];

$sql="INSERT INTO `users`(`id`, `nom`,`prenom`, `usertype`, `email`, `psw`,`avatar`) VALUES (null,'".$nom."','".$prenom."','etud','".$email."','1234','default-avatar.png');";

$RESULT=mysqli_query($conn,$sql);

$sql1="INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `email`, `niveau`, `filiere`) VALUES (null,'$nom','$prenom','$email','$niveau','$filiere')";

$RESULT1=mysqli_query($conn,$sql1);

header("location: ../ajoutUtilisateurs.php");