<?php

session_start();


if(!isset($_SESSION["username"]))
{
	header("location:../form3.php");
}



$l=$_POST['niveau'];
$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT * FROM `afffiliere` ; ");
$data2 = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data2, $row);
}
echo json_encode($data2);
exit();