<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:../form3.php");
    }
             
        // Connexion à MySQL
        $conn = mysqli_connect("localhost", "root", "", "pfa");
        
        $select = mysqli_query($conn, "SELECT * FROM afffiliere WHERE id1 = '".$_SESSION['ide']."' or id2 = '".$_SESSION['ide']."' or id3 = '".$_SESSION['ide']."'");
        if(mysqli_num_rows($select)) {
            header("location:trinome.php");
        } else {
            header("location:inscription1.php");
        } 
?>