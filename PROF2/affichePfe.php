<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:../form3.php");
    $sql = "select * from professeur  where email='" . $username . "' ";

    $result = mysqli_query($data, $sql);

    $rows = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $rows['id'];
    $_SESSION["username"] = $username;
    $_SESSION["prenom"] = $rows['prenom'];
    $_SESSION['nom'] = $rows['nom'];
    $_SESSION['telephone'] = $rows['telephone'];
    $_SESSION['CIN'] = $rows['CIN'];
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>

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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <title>Gestion des PFEs, PFAs, et stage d’été</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--
    Ramayana CSS Template
    https://templatemo.com/tm-529-ramayana
        -->
    <meta charset="UTF-8">
    <title></title>
    <script src="script/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="script/etudiant.js" type="text/javascript"></script>


    <!-- Additional CSS Files -->
    < <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js">
        </script> -->

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon  active fa fa-laptop"></i>Dashboard </a>
                    </li> <li class="menu-title">Menu Professeur</li>
                    <li>
                        <a href="Homepage.php"><i class="menu-icon fa fa-home"></i>Homepage </a>
                    </li>
                    </li>


                            <li><a href="AjoutSjts.php"><i class="menu-icon fa fa-book"></i>Sujets</a></li>
                            <li><a href="RendzVous.php"><i class="menu-icon fa fa-calendar"></i>Rendez-vous</a></li>
                            <li><a href="rapportP.php"><i class="menu-icon fa fa-book"></i>Raport PFA</a></li>
                            

                            <li><a href="Sout.php"><i class="menu-icon fa fa-gavel"></i>Soutnance</a></li> 
                            <li><a href="affichePfe.php"><i class="menu-icon fa fa-book"></i>Liste PFE</a></li>
                            <li><a href="rapportprofpfe.php"><i class="menu-icon fa fa-book"></i>Raport PFE</a></li>
                            <li><a href="addDeadline.php"><i class="menu-icon fa fa-book"></i>Deadline  PFE</a></li>
                           
                           




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
                <a class="navbar-brand" href="./"><img src="images/logo1.png" alt="Logo" style="max-width:83px"></a>
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
                            <img class="user-avatar rounded-circle" src="../avatars/<?php echo $_SESSION['avatar']?>" alt="User Avatar">
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
                                    <li><a href="#">Table</a></li>
                                    <li class="active">PFA list</li>
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
                                <strong class="card-title">PFA list</strong>
                            </div>
                            <div class="card-body">
                            

                                <fieldset>
                                    <legend>Affichage des lists PFEs</legend>

                                    <?php
                                    $mysqli = new mysqli("localhost", "root", "", "pfa");
                                    $mysqli->set_charset("utf8");
                                    $requete = "SELECT * FROM AffProfEtud where professeur='".$_SESSION['nom']." ".$_SESSION['prenom']."'";
                                    $resultat = $mysqli->query($requete);
                                    

                                    ?>
                                    
                                    <form method="post" action="insertPFE.php">
                                    
                                        <table id="bootstrap-data-table" class="table ">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Etudiant</th>
                                                    

                                                    <th>Entreprise</th>
                                                    <th>Encadrant</th>

                                                    <th>Edit</th>


                                                </tr>
                                                <tr>

                                                    <form method="POST" action="insertPFE.php">
                                                        <?php while ($row = $resultat->fetch_assoc()) {
                                                            
                                                        ?>
                                                        
                                                            <td><?php echo $row['id']?></td>
                                                            <td><?php echo $row['etudiant']; ?></td>
                                                          
                                                            <td><?php echo $row['entreprise']; ?></td>
                                                            <td><?php echo  $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></td>
                                                            <td><a href="addDeadline.php?id=<?php echo $row['id'] ?>" class="btn btn-primary mb-1" title="Update Record">Edit</a></td>
                                                            
                                                </tr>
                                                <?php }
                                                        
                                                        ?>
                                        </table>
                                        </thead>

                                    </form>
                                    <tbody id="content" style="box-shadow:20px">

                                    </tbody>
                                    </table>


                                </fieldset>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- .content -->



        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/init/datatables-init.js"></script>





</body>

</html>