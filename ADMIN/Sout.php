<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:../form3.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Gestion des PFEs, PFAs, et stage d’été</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        .sub {
            background-color: #6f42c1;
            color: #eeeeee;
            display: inline-block;
            border-radius: 5px;
            border: 2px double #cccccc;
            color: #eeeeee;
            text-align: center;
            font-size: 20px;
            width: 150px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .sub:hover {
            color: #6f42c1;
        }

        .sub:focus {
            color: #6f42c1;
        }

        input[type=text] {
            border: 2px solid #6f42c1;
            border-radius: 4px;
        }

        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
      
        }

        .select-selected {
            background-color: DodgerBlue;
        }

      .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

  .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

    .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

      .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

      .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: #6f42c1;
        }
    </style>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="simple_page.html">Gestion des PFEs, PFAs, et stage d’été</a>
                    </div>
                </header>

                <!-- Page Heading -->
                <div class="page-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Fiche</h1>
                                <p><strong>&nbsp;</strong></p>
                                <form action="sendSout.php" method="GET">
                                    <table width="800" height="500" border="0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Projet name</th>
                                                <td><label for="select3"></label>
                                                    <select name="pn" class="custom-select" style="width:600px;" id="data3" >

                                                    </select>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row"> Professeurs  1 :</th>
                                                <td> <input type="text" name="PQ" id="textfield"></td>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th scope="row">Professeurs  2 :&nbsp;<echo ></th>
                                                <td>
                                                    <select name="m2" class="custom-select" style="width:200px;" id="data">
                                                        <option>----------</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Professeurs  3 :&nbsp;<input type='hidden' name='id3' id='id3'></th>
                                                <td><label for="select2"></label>
                                                    <select name="m3" class="custom-select" style="width:200px;" id="data2">
                                                        <option>----------</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            

                                        </tbody>
                                    </table>
                                    <button type="submit" id="submit">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Simple Post -->
               
                <!-- Contact Form -->


            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Search Box -->
                <section id="search" class="alt">
                    <form method="get" action="#">
                        <input type="text" name="search" id="search" placeholder="Search..." />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <ul>

                        <li><a href="ficheetudiant.php">Fiche</a></li>


                        <li>
                            <span class="opener">PFA</span>
                            <ul>
                            <li><a href="pfaadmin.php">View pfa groupe</a></li>
                                <li><a href="Sout.php">Soutenance</a></li>
                                <li><a href="#">A VENIR</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">PFE & STAGE</span>
                            <ul>
                                <li><a href="index.php">INFO PFE</a></li>
                                <li><a href="#">A VENIR</a></li>
                                <li><a href="#">A VENIR</a></li>
                            </ul>
                    </ul>
                    </li>
                    <li><a href="../logout.php">LogOut</a></li>
                    </ul>
                </nav>
                <!-- Featured Posts -->


                <!-- Footer -->
                <footer id="footer">

                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "ficheSout.php", true);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var data = JSON.parse(this.responseText);
                console.log(data);
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var firstName = data[a].nom;
                    var lastName = data[a].prenom;



                    var x = document.getElementById("data");
                    var option = document.createElement("option");
                    option.value = firstName + " " + lastName;
                    console.log(option.value);
                    option.text = firstName + " " + lastName;
                    x.add(option);


                }


            }
        };
        $("#data").change(function() {
            var l = document.getElementById("data").value;
            console.log(l);
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "getid.php?sel=" + l, true);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var id = data[0].id;
                    document.getElementById("id2").value = id;


                }
            };

        })
        $("#data2").change(function() {
            var l1 = document.getElementById("data2").value;
            console.log(l1);
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "getid.php?sel=" + l1, true);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var id = data[0].id;
                    document.getElementById("id3").value = id;


                }
            };

        })
    </script>
    <script>
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "ficheSout.php", true);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var data = JSON.parse(this.responseText);
                console.log(data);
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var firstName = data[a].nom;
                    var lastName = data[a].prenom;


                    var x = document.getElementById("data2");
                    var option = document.createElement("option");
                    option.value = firstName + " " + lastName;
                    console.log(option.value);
                    option.text = firstName + " " + lastName;
                    x.add(option);


                }


            }
        };
    </script>

    <script>
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "sujet.php", true);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var data = JSON.parse(this.responseText);
                console.log(data);
                var html = "";
                for (var a = 0; a < data.length; a++) {
                    var firstName = data[a].libelle;
                    var PName = data[a].Professeur;
                    var html2 = "";
                    html2 = PName
                    var x = document.getElementById("data3");
                    var option = document.createElement("option");
                    option.value = firstName;
                    console.log(option.value);
                    option.text = firstName;
                    x.add(option);

                }


                document.getElementById("textfield").value = html2;

            }
        };
        $("#data3").change(function() {
            var l = document.getElementById("data3").value;
            console.log(l);
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "prof.php?libelle=" + l, true);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var PName = data[0].Professeur;
                    console.log(PName);
                    document.getElementById("textfield").value = PName;
                    document.getElementById("textfield2").value = data[0].description;


                }
            };

        })
    </script>
</body>


</body>

</html>