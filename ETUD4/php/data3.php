<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:../form3.php");
}

$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT * FROM `afffiliere` WHERE id1='" .$_SESSION["ide"]. "' or id2='" .$_SESSION["ide"]. "'or id3='" .$_SESSION["ide"]. "'; ");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);