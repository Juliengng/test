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

   
   

   
   
    <link href="assets/css/style6.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logf.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
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
                    	<h1><b><?php echo $id; ?></b>'s information</h1><br>
					        <div class="row">
								<div class="col-sm-4">
									<img class="img-circle responsive" src="assets/profilepics/<?php echo $firmPP; ?>" width="250" height="250">
                                    <form action="../controller/firm_modifyinfo.php" method="post">
                                        <button class="add_intern validate" type="submit" name="modifierfirm" value="modifierfirm">Validate</button>
                                </div>

								<div class="col-sm-6">
									<table class="responstable">
									<?php 
									$infos=personal_info_firm($id);
									foreach($infos as $info){?>
							  
									 	<tr>
									    	<th>Personal Information</th>
									    	<th><span></span></th>

							  			</tr>
							  			<tr>
										    <td><b>Firm Name</b></td>
										    <td><input type="text" value="<?php echo"$info[FirmName]" ?>" name="firmname" class="add_intern form"></td>
										</tr>
										<tr>
										    <td><b>Firm insurance number</b></td>
										    <td><input type="text" value="<?php echo"$info[FirmInsuranceNum]" ?>" name="firminsnum" class="add_intern form"></td>
										</tr>
										<tr>
										    <td><b>Firm regular number</b></td>
										    <td><input type="text" value="<?php echo"$info[FirmRegNum]" ?>" name="firmregnum" class="add_intern form"></td>
										</tr>
										<tr>
										    <td><b>Supervisor name</b></td>
										    <td><input type="text" value="<?php echo"$info[Supervisor]" ?>" name="supervisor" class="add_intern form"></td>
										</tr>
										
										<tr>
										    <td><b>Activity</b></td>
										    <td><input type="text" value="<?php echo"$info[activity]" ?>" name="activity" class="add_intern form"></td>
										</tr>
										<tr>
										    <td><b>Skype account</b></td>
										    <td><input type="text" value="<?php echo"$info[FirmSkypeAccount]" ?>" name="skype" class="add_intern form"></td>
										</tr>
										<?php } ?>
								</table>
							</div>
                        </form>
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
