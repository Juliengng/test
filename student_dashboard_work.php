<?php 
require('../controller/student_loggedin.php'); 
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
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
    <link href="assets/libs/bootstrap-material-design/mdb.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="assets/css/student_dashboard.css" rel="stylesheet">
	<link href="assets/css/student_dashboard_table.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara" rel="stylesheet">
  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="student_dashboard.php"><img src="assets/img/logostudent.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="student_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search Internship</span></a></li>
						<li><a href="student_interview.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Interviews</span></a></li>
                        <li><a href="student_postad.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Post Advertisement</span></a></li>
          
                        <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile Page</span></a></li>
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
                            <div class="search hidden-xs hidden-sm">
                             
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/profilepics/<?php echo $profilepic;?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $name; ?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $email; ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="student_dashboard_profile.php" class="view btn-sm active">View Profile</a>
													<a href="#" class="view btn-sm active" data-toggle="modal" data-target="#add_project1">Delete your account</button></a>
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
                    <h1>Hello, <?php echo $name; ?>! </h1>
					<br>
               	<div class="row">
				<div class="col-sm-4">
				<p style="float: left;">
				<img class="img-circle" src="assets/profilepics/<?php echo $profilepic; ?>" width="250" height="250" class="mb-7 hero-image"></p>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<a href="student_dashboard_profile.php"><button type="button" class="btn btn-primary">My Personal Information</button></a><br><br>
				<a href="student_modify_profile.php"><button type="button" class="btn btn-primary">Modify my personal information</button></a><br><br>
				
			</div>
				<div class="col-sm-6">
				<table class="responstable1">
  
  <tr>
    <th>Work Experiences</th>
    <th><span></span></th>

  </tr>
     <?php include("../controller/student_loggedin_work.php"); ?>
 
  
</table>
</div>	
</div>	
		</div>	
	</div>
                </div>
				</div>
  



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

	<div id="add_project1" class="modal fade" role="dialog">
	<form  method="post" action="">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Are you sure you want to delete your account?</h4>
                </div>
				
                <div class="modal-footer">
				
                    <button type="button" class="cancel" data-dismiss="modal">No</button>
					
                    <a href="logout.php" class="add-project" >Yes</a>
					
				<?php	
				if(isset($_POST['delete'])){
					require('../Model/student_loggedin.php'); 
					require('../database/mysql_connect.inc.php'); 
		$id=$_POST['delete'];
		
		delete_student($id);
		   
		  header("Location:../view/logout.php");
		
		
		
		  }	
		  ?>
                </div>
			
            </div>

        </div>
			</form>
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

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/dash.js"></script>
  </body>
</html>

