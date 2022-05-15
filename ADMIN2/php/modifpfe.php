<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");

$sql1="UPDATE `dossierpfe` SET `etat1`='".$_GET['etat1']."',`etat2`='".$_GET['etat2']."',`etat3`='".$_GET['etat3']."' WHERE nom='".$_GET['nome']."'";

$RESULT1=mysqli_query($conn,$sql1);

header("location: ../homeadmine.php");