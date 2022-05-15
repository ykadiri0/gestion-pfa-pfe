<?php
session_start();


if(!isset($_SESSION["username"]))
{
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

        <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
                <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>profile Admin : </a>
                    </li>
                    <li class="menu-title">Menu Admine</li>
                    <!-- /.menu-title -->
                    <li>
                        <a href="homeadmine.php"><i class="menu-icon fa fa-laptop"></i>Liste des Etudiants : </a>
                    </li>

                    <li>
                        <a href="filiere.php"><i class="menu-icon fa fa-laptop"></i>Liste des filieres : </a>
                    </li>
                    
                    <li>
                        <a href="ajuser.php" class="dropdown-toggle" aria-haspopup="true" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Ajouter Utilisateur :</a></a>

                    </li>
                    <li>
                        <a href="pfaadmin.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Modilier dans les PFAs :</a>

                    </li>
                    
                    <li>
                        <a href="Sout.php" class="dropdown-toggle" aria-haspopup="true" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gavel"></i>affecter juges PFAs </a>

                    </li>
                    <li>
                        <a href="homeadmine2.php" class="dropdown-toggle" aria-haspopup="true" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-book"></i>les notes des PFAs :</a>

                    </li>
                    <li>
                        <a href="affPfe.php" class="dropdown-toggle" aria-haspopup="true" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gavel"></i>affecter juges PFE </a>

                    </li>
                    <li>
                        <a href="etatsd.php" class="dropdown-toggle" aria-haspopup="true" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-book"></i>Etat dossier PFE</a>

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
                    <a class="navbar-brand" href="./"><img src="images/logo1.png" alt="Logo" style="width: 83px;"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
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
                            <img class="user-avatar rounded-circle" src="../avatars/<?php echo $_SESSION['avatar']?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="ficheetudiant.php"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>



                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i>Logout</a>
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
                                <h1>Utilisateurs :</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="ajuser.php">Ajouter utilisateurs :</a></li>
                                    <li class="active">Ajouter Professeurs :</a></li>


                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #b8bcfc;
    border-bottom: 1px solid #b8bcfc;">
                                <strong class="card-title">Ajouter Professeur :</strong>
                            </div>
                            <div class="card-body">
        <div class="page-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="page-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>&nbsp;
        </strong></p>
                                    <h2>
                                        <center>Informations
                                        </center>

                                    </h2>
                                    <br>
                                    <form method="POST" action="php/ajprof.php">

                                        <fieldset>
                                            <table style="margin:auto;">
                                                <th>
                                                <legend></legend><label for="pseudo">   Nom : </label>
                                            <br><input type="text" name="nom" placeholder="nom" data-rule-required="true" data-msg-required="Le champ Pseudo est requis." /><span data-valmsg-for="pseudo" data-valmsg-replace="true"></span></fieldset><br>
                                            
                                        <fieldset>
                                            <legend></legend><label for="pseudo">   Prenom : </label><br><input type="text" name="prenom" placeholder="prenom" data-rule-required="true" data-msg-required="Le champ Pseudo est requis." /><span data-valmsg-for="pseudo"
                                                data-valmsg-replace="true"></span></fieldset><br> 
                                        <fieldset>
                                            <legend></legend><label for="email">    Email : </label><br><input type="text" name="email" placeholder="bruno.lesieur@gmail.com" style="width:120%;" data-rule-required="true" data-msg-required="Le champ Email est requis." data-rule-email="true"
                                                data-msg-email="Le champ Email n'a pas le bon format." /><span data-valmsg-for="email" data-valmsg-replace="true"></span></fieldset><br>
                                                </th>
                                            </table>
                                            
                                        
                                        <fieldset><center><button class="btn btn-success" type="submit" value="Valider">Valider</button></center></fieldset>

                                    </form>
                                    <hr />
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>














































                    </div>
                </div>
            </div>
        </div>
        <!-- .content -->
        <div class="clearfix"></div>

        <footer class="site-footer">

        </footer>


    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
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
            /hide original SELECT element: /
        }
        
        .select-selected {
            background-color: DodgerBlue;
        }
        
        /style the arrow inside the select element:/ .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #6f42c1 transparent transparent transparent;
        }
        
        /point the arrow upwards when the select box is open (active):/ .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }
        
        /style the items (options),
        including the selected item:/ .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }
        
        /style items (options):/ .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }
        
        /hide the items when the select box is closed:/ .select-hide {
            display: none;
        }
        
        .select-items div:hover,
        .same-as-selected {
            background-color: #6f42c1;
        }
    </style>












    <script src="https://cdn.jsdelivr.net/npm/peity@3.3.0/jquery.peity.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/init/peitychart-init.js"></script>
    <!-- scripit init-->

</body>

</html>