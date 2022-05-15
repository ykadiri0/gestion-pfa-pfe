<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];

$sql="INSERT INTO `users`(`id`, `nom`, `usertype`, `email`, `psw`) VALUES (null,'".$nom."','admin','".$email."','1234');";

$RESULT=mysqli_query($conn,$sql);

header("location: ../ajouteradmin.php");