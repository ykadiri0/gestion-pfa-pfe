<?php

$conn = mysqli_connect("localhost", "root", "", "pfa");

$sql1="UPDATE `afffiliere` SET `Mbr1`='".$_GET['Mbr1']."',`Mbr2`='".$_GET['Mbr2']."',`Mbr3`='".$_GET['Mbr3']."',`sjts`='".$_GET['pn']."',`Professeur`='".$_GET['PQ']."' WHERE id='".$_GET['id']."'";

$RESULT1=mysqli_query($conn,$sql1);

header("location: ../pfaadmin.php");