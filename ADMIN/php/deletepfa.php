<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM afffiliere WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location: ../pfaadmin.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>