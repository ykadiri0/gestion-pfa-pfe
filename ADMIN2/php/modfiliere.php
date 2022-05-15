<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");
$nom=$_GET['nf'];
$id=$_GET['filiere'];

$sql="UPDATE `filiere` SET `libelle`='".$nom."' WHERE libelle='".$id."'";

$RESULT=mysqli_query($conn,$sql);

$sql="UPDATE `afffiliere` SET `filiere`='".$nom."' WHERE filiere='".$id."'";

$RESULT=mysqli_query($conn,$sql);

$sql="UPDATE `etudiant` SET `filiere`='".$nom."' WHERE filiere='".$id."'";

$RESULT=mysqli_query($conn,$sql);

$sql="UPDATE `sjts` SET `filiere`='".$nom."' WHERE filiere='".$id."'";

$RESULT=mysqli_query($conn,$sql);

header("location: ../filiere.php");