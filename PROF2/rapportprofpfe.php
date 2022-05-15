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
                <div class="header-menu" style="background: #b8bcfc;">
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
        <div class="page-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">


<br><br>


                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header" style="
                                    padding: 0.75rem 1.25rem;
                                    margin-bottom: 0;
                                    background-color: #b8bcfc;
                                    border-bottom: 1px solid #b8bcfc;">
                                <strong class="card-title">PFA list</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>Etudiant</th>
                                            <th>Entreprise</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $host="localhost";
                                        $user="root";
                                        $password="";
                                        $db="PFA";
                                        $data=mysqli_connect($host,$user,$password,$db);
                                        $sql2="SELECT * FROM `rapportpfe` WHERE professeur='".$_SESSION['nom']." ".$_SESSION["prenom"]."' ";

                                                $result2=mysqli_query($data,$sql2);



                                                          if (mysqli_num_rows($result2) > 0) {
                                                                        while ($rows = mysqli_fetch_assoc($result2)) {
                                                                            $sql="SELECT * FROM users WHERE email in (select email from etudiant where id=".$rows['ide'].")";

	                                                                         $result=mysqli_query($data,$sql);

	                                                                        $rows2= mysqli_fetch_assoc($result);
                                                                            echo'
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="../avatars/'.$rows2['avatar'].'" alt=""></a>
                                                </div>
                                            </td>
                                            <td> '.$rows['etudiant'].' </td>
                                            <td>  <span class="name">'.$rows['entreprise'].'</span> </td>
                                            <td> <span class="product">'.$rows['description'].'</span> </td>
                                            <td><span class="count">'.$rows['daterapport'].'</span></td>
                                            <td>
                                                <span class="badge badge-complete"><a href="../storage/rapportpfe/'.$rows['rapport'].'"  download>
                                                                                <button class="btn btn-outline-success btn-sm" href="">Download Rapport</button></span>
                                            </td>
                                        </tr>';
                                    }
                                }?>
                                       
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
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
            border-color: #6f42c1 transparent transparent transparent;
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












    <script src="https://cdn.jsdelivr.net/npm/peity@3.3.0/jquery.peity.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/init/peitychart-init.js"></script>
    <!-- scripit init-->

</body>

</html>