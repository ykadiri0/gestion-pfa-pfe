
		<?php

		
$conn = mysqli_connect("localhost", "root", "", "pfa");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$entreprise = $_REQUEST['pn'];
$nom = $_REQUEST['PQ'];
$prenom = $_REQUEST['PQ1'];
$professeur = $_REQUEST['m2'];
$id = $_REQUEST['idetud'];



$sql = "INSERT INTO `AffProfEtud`(`id`,`idetud`, `etudiant`, `entreprise`, `Professeur`) VALUES (null,'$id','$nom"." "."$prenom','$entreprise','$professeur')";


if(mysqli_query($conn, $sql)){


    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
header("location:../ADMIN2/affPfe.php");
?>
