
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "pfa");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$sjts = $_REQUEST['pn'];
		$rapport = $_REQUEST['PQ'];
		$note = $_REQUEST['m2'];
		
		
	
		$sql = "INSERT INTO notes VALUES (null,'$sjts','$rapport','$note')";
		$sql1 = "INSERT INTO rapport VALUES (null,'$sjts','$rapport')";

		if(mysqli_query($conn, $sql)){
		

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		header("location:../Prof/Sout.php");
		?>
	