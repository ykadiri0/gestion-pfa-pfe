<?php

$host="localhost";
$user="root";
$password="";
$db="PFA";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from users where email='".$username."' AND psw='".$password."'";

	$result=mysqli_query($data,$sql);

	$rows= mysqli_fetch_assoc($result);

	if($rows["usertype"]=="admin")
	{	
        $_SESSION['avarat']=$rows['avatar'];
        $_SESSION['id']=$rows['id'];
		$_SESSION["username"]=$username;
        $_SESSION['nom']=$rows['nom'];

		header("location:ADMIN/homeadmine.php");
	}

	elseif($rows["usertype"]=="prof")
	{
        $sql2="select * from professeur  where email='".$username."' ";

	    $result2=mysqli_query($data,$sql2);
        $_SESSION['avarat']=$rows['avatar'];
	    $rows2= mysqli_fetch_assoc($result2);
        $_SESSION['id']=$rows['id'];
        $_SESSION["prenom"]=$rows2['prenom'];
        $_SESSION['nom']=$rows['nom'];
		$_SESSION["username"]=$username;
        $_SESSION['nom']=$rows['nom'];
		header("location:PROF/rapportP.php");
	}

    elseif($rows["usertype"]=="etud")
	{
        $sql2="select * from etudiant  where email='".$username."' ";

	    $result2=mysqli_query($data,$sql2);
        $_SESSION['avatar']=$rows['avatar'];
	    $rows2= mysqli_fetch_assoc($result2);
        $_SESSION['id']=$rows['id'];
		$_SESSION["username"]=$username;
        $_SESSION["prenom"]=$rows2['prenom'];
        $_SESSION['nom']=$rows['nom'];
        $_SESSION['niveau']=$rows2['niveau'];
        $_SESSION['filier']=$rows2['filiere'];
		header("location:ETUD2/ficheetudiant.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>


















<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-PurrfectMatch</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="css3.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"></i>X</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Sign Up</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Log In</h3>
                    <div class="d-flex justify-content-end social_icon">

                    </div>
                </div>
                <form action="#" method="POST">
                <div class="card-body">
                    
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit"  value="Login" class="btn float-right login_btn">
                        </div>
                   
                </div> </form>
             
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
