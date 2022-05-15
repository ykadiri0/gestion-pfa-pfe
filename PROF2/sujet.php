<?php
$prof=$_GET["prof"];
$conn = mysqli_connect("localhost", "root", "", "pfa");
$result = mysqli_query($conn, "SELECT * FROM `sout` where professeur1='".$prof."' or professeur2='".$prof."' or professeur3='".$prof."';");
$data2 = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data2, $row);
}
echo json_encode($data2);
exit();