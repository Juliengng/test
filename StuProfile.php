<?php session_start();

if (isset($_SESSION['username']))
{
		$id =$_SESSION['username'];
		$role = $_SESSION['role'];
}
else {
  header('Location: login.php');
  exit();
}

require_once("mysql_connect.inc.php");


		$sql = "SELECT * FROM `stu_personal_info`,`uinfo` WHERE `stu_personal_info`.`StuUsrName` = '$id' AND `stu_personal_info`.`StuUsrName` = `uinfo`.`StuUsrName`";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_row($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Profile</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]-->
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> <button type="button" class="navbar-toggle"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span> </button><a
            class="navbar-brand"
            href="index.php">Boardingates</a>
        </div>


		<?php
		if (isset($role) && $role == 'firm'){
		?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="SearchIntern.php">Search Internship</a> </li>
            <li> <a href="firm_home.php">Firm Homepage</a> </li>
            <li> <a href="FirmPostIntern.php">Post Internship</a> </li>
            <li><font color="white">Welcome To Boardingate</font>
              <form autocomplete="off" action="" name="name"><font color="white"><?php echo $id; ?></font>
              </form>

            </li>
            <li> <a href="logout.php">Logout</a> </li>
          </ul>
        </div>

		<?php
		}else if(isset($role) && $role == 'student'){
		?>

		<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="SearchIntern.php">Search Internship</a> </li>
            <li> <a href="student_home.php">Student Homepage</a> </li>
            <li> <a href="StuProfile.php">Profile Page</a> </li>
            <li><font color="white">Welcome To Boardingate</font>
              <form autocomplete="off" action="" name="name"><font color="white"><?php echo $id; ?></font>
              </form>

            </li>
            <li> <a href="logout.php">Logout</a> </li>
          </ul>
        </div>

		<?php
		}else if(isset($role) && $role == 'ambassador'){
		?>

		<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><br>
            </li>
            <li><br>
            </li>
            <li><a href="SearchIntern.php">Search Internship</a> </li>
            <li> <a href="ambassador_home.php">Ambassador Homepage</a> </li>
            <li> <a href="AmbPostIntern.php">Post Internship</a> </li>
            <li> <a href="AmbProfile.php"">Profile Page</a></li>
            <li><font color="white">Welcome To Boardingate</font>
              <form autocomplete="off" action="" name="name"><font color="white"><?php echo $id; ?></font>
              </form>

            </li>
            <li> <a href="logout.php">Logout</a></li>
          </ul>
        </div>

		<?php
		} else {
		?>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="SearchIntern.php">Search Internship</a> </li>
            <li> <a href="AmbSignup.php">Be an Ambassador!</a> </li>
            <li> <a href="FirmSignup.php">Be a Intern Host!</a> </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
                Page </a>
              <ul class="dropdown-menu">
                <li> <a href="student_login.php">Student Login</a> </li>
                <li> <a href="AmbLogin.php">Ambassador Login</a> </li>
                <li> <a href="FirmLogin.php">Firm Login</a> </li>
              </ul>
            </li>
          </ul>
        </div>

        <?php }
        ?>



        <!-- /.navbar-collapse --> </div>
      <!-- /.container --> </nav>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Student Profile </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Student profile</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row"><b> </b>
        <section style="margin-left: 19px;" id="personalinfo"><br>
          <hr>
          <h2>Personal Information</h2>
          <p class="lead">Given name:&nbsp;<?php echo $row[1] ?></p>
          <p class="lead">Surname :&nbsp;<?php echo $row[2] ?></p>
          <p class="lead">Gender: <?php echo $row[3] ?></p>
          <p class="lead">Date of Birth:&nbsp; <?php echo $row[4] ?></p>
          <p class="lead">Nationality:&nbsp; <?php echo $row[5] ?> </p>
          <p class="lead">Mailing address: <?php echo $row[8] ?></p>
          <p class="lead">Contact number: <?php echo $row[9] ?></p>
		  <p class="lead">Languages: <?php echo $row[12] ?></p>
		  <p class="lead">Skills: <?php echo $row[13] ?></p>
          <section id="uinfo"><br>
            <hr>
            <h2>University Information</h2>
            <p class="lead">University:&nbsp;<?php echo $row[13] ?></p>
            <p class="lead">Country :&nbsp; <?php echo $row[14] ?></p>
            <p class="lead">Address:&nbsp;<?php echo $row[15] ?></p>
            <p class="lead">Expected graduation time:&nbsp;<?php echo $row[17] ?></p>
            <p class="lead">CGPA:&nbsp;<?php echo $row[16] ?> </p>
            <p> <a class="btn btn-primary" href="index.php">Back</a> </p>
            <hr>
            <footer>
        <div class="row">
          <div class="col-lg-12">
            <p style="text-align: right;">contact@boardingates.com </p>
            <div style="text-align: right;">+33 6 64 11 38 85<br>
            </div>
            <div style="text-align: right;"> Copyright © 2016 </div>
          </div>
        </div>
      </footer>
            <table style="width: 1142px; height: 737px;" border="1">
              <!-- Footer -->
              <!-- /.container -->
              <!-- jQuery -->
              <script src="assets/libs/jquery/jquery.js"></script>
              <!-- Bootstrap Core JavaScript -->
              <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
            </table>
          </section>
        </section>
      </div>
    </div>
  </body>
</html>
