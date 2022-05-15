<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:../form3.php");
}


$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT * FROM `tachepfa` where (SYSDATE()<=deadline+1) and sjts in(select sjts from afffiliere where  id1='". $_SESSION["ide"]."' or id2='".$_SESSION["ide"]."' or id3='". $_SESSION["ide"]."') order by  SYSDATE()-deadline DESC; ");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);
