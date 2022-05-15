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
$id=$_GET['filiere'];
// sql to delete a record
$sql = "DELETE FROM filiere WHERE libelle='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location: ../filiere.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$sql = "DELETE FROM afffiliere WHERE filiere='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location: ../filiere.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$sql = "DELETE FROM etudiant WHERE filiere='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location: ../filiere.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$sql = "DELETE FROM sjts WHERE filiere='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location: ../filiere.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>