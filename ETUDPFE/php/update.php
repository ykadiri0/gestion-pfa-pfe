<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:../form3.php");
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cin=$_POST['cin'];
$cne=$_POST['cne'];
$cne=$_POST['cne'];
$psw=$_POST['psw'];

$conn = mysqli_connect("localhost", "root", "", "pfa");

$sql1="UPDATE `etudiant` SET `nom`='".$nom."',`prenom`='".$prenom."',`email`='".$email."',`CNE`='".$cne."',`CIN`='".$cin."',`telephone`='".$tel."' WHERE id=".$_SESSION['ide']."";

$RESULT1=mysqli_query($conn,$sql1);
$_SESSION['CIN']=$cin;
$_SESSION['CNE']=$cne;
$_SESSION['tel']=$tel;
$_SESSION["username"]=$email;
$_SESSION["prenom"]=$prenom;
$_SESSION['nom']=$nom;


     $update_image = $_FILES['update_image']['name'];
     $update_image_size = $_FILES['update_image']['size'];
      $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../rpdf/'.$update_image;
 

        $image_update_query = mysqli_query($conn, "UPDATE `user` SET`nom`='$nom',`prenom`='$prenom',`email`='$email',`psw`='$psw',`avatar`='$update_image'  WHERE id=".$_SESSION['id']."") or die('query failed');
             move_uploaded_file($update_image_tmp_name, $update_image_folder);










header("location: ../ficheetudiant.php");