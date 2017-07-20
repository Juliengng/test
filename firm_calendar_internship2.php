<?php 
require('../controller/model.php');
require('../controller/firm_loggedin.php'); 
require('../controller/firm_calendar_internship.php');
require('../controller/internship_info.php');
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

   
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="http://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>



   
    <link href="assets/css/style6.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/add_internship.css" rel="stylesheet">

    
    

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="home.html"><img src="assets/img/logf.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="firm_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DashBoard</span></a></li>
                        
                        <li><a href="add_internship.php"><i class="fa fa-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Internship</span></a></li>
                        
                        <li class="active"><a href="firm_calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li><a href="firm_settings.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Settings</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                         
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
                    <ol class="breadcrumb">
                        <li><a href="firm_calendar.php">Calendar Home</a> </li>
                        <li class="active">interviews for <?php echo $title; ?></li>
                    </ol>
                    <div class="containera">
					<a data-toggle="modal" data-target="#Iskills" class="btn btn-default sub a" role="button" ><h4><b>Internship skills</b></h4></a>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title firm">
                                    Applicant list
                            </h2>
                            <div class="containera firm">
                                <?php include("../Controller/firm_applicantlist2.php");?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="title firm">
                                    Accepted interns
                            </h2>
                            <div class="containera firm">
                                <?php include("../Controller/accepted_interns2.php");?>
                            </div>
                        </div>
                    </div>
                    
                        <br>
                        <h2 class="title firm">
                                    Scheduled interviews
                        </h2>
                            <div class="containera firm">

                                <?php include("../Controller/firm_scheduled_interviews2.php");?>
                            </div>

                            <br>
                        <h2 class="title firm">
                                    Done interviews
                        </h2>
                            <div class="containera firm">

                                <?php include("../Controller/firm_done_interviews2.php");?>
                            </div>


                    

                  
                   
                          
                </div>  
              
            </div>

        </div>
   </div>

        <div id="Iskills" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                             
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" style="color:black">×</button>
                                   <h4 class="modal-title">Skills required for this internship</h4>
                                 </div>
                                 <div class="modal-body">
                                 
                                    <h2 class="title firm">
                                    Practicall skills
                                    </h2>
                                    <div class="containera firm">
                                        <?php include("../Controller/firm_internship_skills.php");?>
                                    </div>

                                    <br>
                                   <h2 class="title firm">
                                    Personal skills
                                    </h2>
                                    <div class="containera firm">
                                        <?php include("../Controller/firm_internship_persoskills.php");?>
                                    </div>
                                                
                                            

                                </div>
                                    
                                 <div class="modal-footer">
                                 </div>
                                
                               </div>

                        </div>
        </div>


    <!-- /.container -->
    <!-- jQuery -->
    <script type="text/javascript" src="assets/libs/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
  


    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>


   <!-- <script type="text/javascript" src="assets/js/calendar.js"></script>-->






  </body>
</html>
