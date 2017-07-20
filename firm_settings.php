<?php 
require('../controller/model.php');
require('../controller/firm_loggedin.php'); 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to ViceVersa</title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara|Josefin+Slab:700|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   

   
   
    <link href="assets/css/style6.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/add_internship.css" rel="stylesheet">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="assets/img/logf.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="firm_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                        
                        <li><a href="add_internship.php"><i class="fa fa-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Internship</span></a></li>
                        
                        <li><a href="firm_calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li class="active"><a href="firm_settings.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Settings</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log out</span></a></li>
                         
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                           
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/profilepics/<?php echo $firmPP; ?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $id ?></span>
                                                    <p class="text-muted small">
                                                        
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="firm_settings.php" class="view btn-sm active" style="color:white">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <div class="user-dashboard">


                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <img  src="assets/profilepics/<?php echo $firmPP; ?>" class="imgset">
                                        </div>
                                        <div class="col-md-4">
                                            <h2 class="title firm pad">
                                            Informations
                                            </h2>
                                            <div class="containera firm pad">
                                                <?php include("../controller/firm_loggedin_personalinfo.php"); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                           
                                            <div class="containera">
                                                <div class="cont">
                                                  <a href="firm_modify_settings.php"><i class="glyphicon glyphicon-pencil iconbg"></i></a>
                                                   <span>Modify company's information</span>
                                                </div>
                                                <!--<div class="cont">
                                                   <a href="#"><i class="glyphicon glyphicon-remove iconbg"></i></a>
                                                   <span>Delete account</span>
                                                </div>
                                                <div class="cont">
                                                   <a href="#"><i class="glyphicon glyphicon-envelope iconbg"></i></a>
                                                   <span>Contact ViceVersa</span>
                                                </div>-->

                                            </div>
                                        </div>

                                    </div>


                                	
            					
            							
					</div>	
                </div>
            </div>
        </div>
    </div>
                    
    <!-- /.container -->
    <!-- jQuery -->
    <script src="assets/libs/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>

    

   

  </body>
</html>
