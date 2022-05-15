
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "pfa");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$id = $_REQUEST['p1'];
		$nom = $_REQUEST['p2'];
		$prenom = $_REQUEST['p6'];
		$entreprise = $_REQUEST['p3'];
		$encadrant = $_REQUEST['p4'];
		$deadline = $_REQUEST['p5'];
		
		
		mysqli_query($data, "DELETE * FROM  deadlinePfe where id=".$id);
		$sql = "INSERT INTO `deadlinePfe`(`id`, `nom`, `prenom`, `entreprise`, `encadrant`, `deadline`) VALUES ('$id','$nom','$prenom','$entreprise','$encadrant','$deadline')";


		if(mysqli_query($conn, $sql)){
			

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		header("location:../Prof/affichePfe.php");
		?>
	