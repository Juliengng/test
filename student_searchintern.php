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
    <link href="assets/css/arnaque_student.css" rel="stylesheet">
	<link href="assets/css/arnaque1_student.css" rel="stylesheet">

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="student_dashboard.php"><img src="assets/img/logodashboard.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="student_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Internship History</span></a></li>
						<li class="active"><a href="student_searchintern.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search Internship</span></a></li>
                        <li><a href="student_postad.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Post Advertisement</span></a></li>
          
                        <li><a href="student_dashboard_profile.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile Page</span></a></li>
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
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/profilepic.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Barbara LOPEZ</span>
                                                    <p class="text-muted small">
                                                        barbara.lopez@gmail.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="amb_dashboard_profile.php" class="view btn-sm active">View Profile</a>
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
                    <h1>Hello, Barbara! You are a student.</h1>
               	<div class="row">
				<div class="col-sm-4">
				<p style="float: left;">
				<img class="img-circle" src="assets/img/profilepic.jpg" width="250" height="250" class="mb-7 hero-image"></p>
			</div>
				<div class="col-sm-6">
				<table class="responstable">
  
  <tr>
    <th>Personal Information</th>
    <th><span></span></th>

  </tr>
  
  <tr>
    <td><b>Given Name</b></td>
    <td>Barbara</td>

  </tr>
  <tr>
      <td><b>Last Name</b></td>
    <td>Lopez</td>

  </tr>
    <tr>
      <td><b>Gender</b></td>
    <td>Female</td>

  </tr>
    <tr>
      <td><b>Date of Birth</b></td>
    <td>04/07/1995</td>

  </tr>
    <tr>
      <td><b>Nationality</b></td>
    <td>Mexicain</td>

  </tr>
    <tr>
      <td><b>Mailing Address</b></td>
    <td>190 rue por queso</td>
  </tr>
    <tr>
      <td><b>Contact Number</b></td>
    <td>+89780808080</td>

  </tr>
    <tr>
      <td><b>Occupation</b></td>
    <td>Computer Scientist</td>

  </tr>
    <tr>
      <td><b>Skype Account</b></td>
    <td>barbara.lopez1995</td>

  </tr>
  
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

