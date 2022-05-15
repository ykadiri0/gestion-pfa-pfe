<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:../form3.php");
}


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="Homepage.php"><i class="menu-icon fa fa-home"></i>Homepage </a>
                    </li>
                    </li>

                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>PFA</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="AjoutSjts.php">Sujets</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="RendzVous.php">Rendez-vous</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="Sout.php">Soutnance</a></li>

                        </ul>
                    </li>






                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Left Panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header" style="background: #b8bcfc;">
            <div class="top-left">
                <div class="navbar-header" style="background: #b8bcfc;">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars" style="color:black"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search" style="color:black"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close" style="color:black"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell" style="color:black"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check" style="color:black"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info" style="color:black"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning" style="color:black"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope" style="color:black"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php"><i class="fa fa-user" style="color:black"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o" style="color:black"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog" style="color:black"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off" style="color:black"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">PFA</a></li>
                                    <li class="active">Soutnance</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6" style="flex: 0 0 100%;
    max-width: 100%;">







                        <div class="card">

                            <div class="card-header" style="
                                padding: 0.75rem 1.25rem;
                                margin-bottom: 0;
                                background-color: #b8bcfc;
                                border-bottom: 1px solid #b8bcfc;"><strong>Ajouter une</strong> <small>-note</small></div>
                            <div class="card-body">
                                <form action="insert.php" method="GET">
                                    <div class="card-body card-block">


                                    <div class="form-group"><label for="company" class=" form-control-label">Projet name:</label> <select name="pn" class="custom-select" style="width:600px;" id="data3"></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Projet name:</label> <select name="pn" class="custom-select" style="width:600px;" id="data3"></div>

                                    <div class="form-group"><label for="company" class=" form-control-label"> Professeurs 1 :</label> <input type="text" name="PQ" id="textfield"></div>
                                    <div class="form-group"><label for="company" class=" form-control-label"> Professeurs 2 :</label> <select name="m2" class="custom-select" style="width:200px;" id="data">
                                            <option>----------</option>
                                        </select></div>

                                    <div class="form-group"><label for="company" class=" form-control-label"> Professeurs 3 :</label> <select name="m3" class="custom-select" style="width:200px;" id="data2">
                                            <option>----------</option>
                                        </select></div>
                                    <div class="form-group"><label for="company" class=" form-control-label"></label><button type="submit" class="btn btn-outline-info" id="submit" style="background-color:#b8bcfc; color:black;border-color: #b8bcfc;">submit</button></div>
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
</div>
</div>

<!-- Right Panel -->

<!-- Scripts -->



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/transition.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
</body>

</html>

</html>