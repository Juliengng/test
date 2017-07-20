<?php 
require('../controller/model.php');
require('../controller/firm_loggedin.php');
require('../controller/matching.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Firm dashboard</title>
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
                    <a hef="home.html"><img src="assets/img/logf.jpg" alt="merkery_logo" >
                        <img src="assets/img/logf.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="firm_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                       
                        <li><a href="add_internship.php"><i class="fa fa-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Internship</span></a></li>
                        
                        <li><a href="firm_calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li><a href="firm_settings.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Settings</span></a></li>
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
                    <h2><b> My company: <?php echo $firmname ?></b></h2>
                                        

                        <table id="myTable" class="responstable">
                          
                          <tr>
                            <th>Position</th>
                            <th>Localisation</th>
                            <th>Starting Date</th>
                            <th>Information</th>  
                            <th>Applicants</th>
                            <th>Interview's planning</th>
                            <th><span></span></th>
                          </tr>
                            <?php
                           
                            
                            $id = $_SESSION['username'] ;
                            $role = $_SESSION['role'];

                            $internships = get_firm_internship("$id");
                            $nj=mysqli_num_rows($internships);

                            if($nj!=0)
                            {
                            // Pour chaque stage de la compagny 
                            foreach ($internships as $internship)
                            {   
                                $internshipID= $internship['InternshipID'];
                                $x=1;
                                // Récupération de tout les postulants à ce stage
                                $applicants = get_applicants($internshipID);
                                $count = get_number_applicants($internshipID);
                                $done = get_number_done($internshipID);
                                $scheduled = get_number_scheduled($internshipID);
                                ?>
                               
                                <tr style="color:#504e63">

                                    <td style="width:15%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        <h4 style="text-align:center"><b class="titre"> <?php echo "$internship[JobTitle]"; ?></b></h4></a>
                                         
                                            
                                    </td>

                                    <td style="width:16%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        <p style="text-align:center"><b><?php echo "$internship[Location]"; ?></b></p></a>
                                    </td>
                                    <td style="width:10%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        <p style="text-align:center"><b> <?php echo "$internship[DurationStart]"; ?></b></p></a>
                                    </td>
                                    <td style="width:16%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        
                                        <p style="text-align:center"><b> Number : <?php echo "$internship[Quota]"; ?></b></p>
                                        
                                        <p style="text-align:center"><i style="font-size:0.8em">Posted by: </i><b><?php echo "$internship[Supervisor]"; ?></b></p></a>
                                        
                                    </td>
                                    <td style="width:8%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        <p style="text-align:center;"><b><?php echo "$count" ?> applicants</b></p>
                                        
                                    </td>

                                    <td style="width:25%"><a href="firm_calendar_internship.php?ID=<?php echo "$internship[InternshipID]"; ?>">
                                        <p style="text-align:center;"><b><?php echo $done ?> interviews done</b>
                                        </p>
                                        <p style="text-align:center;"><b><?php echo $scheduled ?> interviews scheduled</b></p>
                                        
                                       </a>     
                                    </td>
                                    <td style="width:4%">
                                    <form action="../controller/delete_internship.php" method="post">
                                            <button  name="del" type="submit" class="minidel" value=<?php echo "$internship[InternshipID]"; ?>>X</button>
                                        </form>
                                    </td>    
                                </tr> 

                            <?php }
                            }
                            else 
                            {   
                                echo'<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><center><h4><b> "You do not have any internship"</b></h4></center></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                  </div>';
                            } ?>   
                        </table>
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
