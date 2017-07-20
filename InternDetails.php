<?php session_start();

include("mysql_connect.inc.php");



if (isset($_SESSION['username'])) {
		$id =$_SESSION['username'];
		$role = $_SESSION['role'];
}

if(isset($_POST['internship'])) {
	$internshipID = $_POST['internship'];

	$sql = "SELECT * FROM `internship` WHERE InternshipID = '$internshipID'";
	$result = mysqli_query($link, $sql);
	$internship = mysqli_fetch_assoc($result);

  $start = date_create($internship['DurationStart']);
  $end = date_create($internship['DurationEnd']);
  $interval = date_diff($start,$end);

  $lang = $internship['Language'];
  $sql = "SELECT * FROM `language` WHERE LanguageID = '$lang'";
	$result = mysqli_query($link, $sql);
	$language = mysqli_fetch_assoc($result);

  $loc = $internship['Location'];
  $sql = "SELECT * FROM `country` WHERE CountryID = '$loc'";
	$result = mysqli_query($link, $sql);
	$location = mysqli_fetch_assoc($result);

  $sql = "SELECT * FROM `InternshipSkills` WHERE InternshipID = '$internshipID'";
	$result = mysqli_query($link, $sql);
	$skills = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $sql = "SELECT * FROM `InternshipPersonalSkills` WHERE InternshipID = '$internshipID'";
	$result = mysqli_query($link, $sql);
	$persSkills = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Intern details</title>
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
            <li> <a href="AmbProfile.php">Profile Page</a></li>
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
          <h3 class="page-header">Internship Details</h3>
            <!--<small>Subheading</small>--> </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li><a href="SearchIntern.php">Search Intern</a></li>
            <li class="active">Internship Details</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="container">
          <div class="jumbotron text-center">
            <h2><?php echo $internship['JobTitle'];?></h2>
          </div>
          <hr width="100%">
          <div class="col-md-24 col-sm-24">
            <table style="width: 100%" border="0">
              <thead>
                <tr>
                  <td><b>Job Category</b></td>
                  <td><?php echo $internship['JobCategory'];?></td>
                </tr>
                <tr>
                  <td><b>Description</b></td>
                  <td><?php echo $internship['Description'];?></td>
                </tr>
                <tr>
                  <td><b>Duration</b></td>
                  <td><?php echo $interval->format('%a');?> days</td>
                </tr>
                <tr>
                  <td><b>Location</b></td>
                  <td><?php echo $location['CountryName'];?></td>
                </tr>
                <tr>
                  <td><b>Quota</b></td>
                  <td><?php echo $internship['Quota'];?></td>
                </tr>
                <tr>
                  <td><b>Salary</b></td>
                  <td><?php echo $internship['Salary'];?></td>
                </tr>
                <tr>
                  <td><b>Language</b></td>
                  <td><?php echo $language['LanguageLabel'];?></td>
                </tr>
                <tr>
                  <td><b>Skills</b></td>
                  <td>
                  <?php
				  $skillList="";
                    foreach ($skills as $s) {
                      $sql = "SELECT * FROM `skill` WHERE `SkillID` = '".$s['SkillID']."'";
                      $res = mysqli_query($link, $sql);
                      $skill = mysqli_fetch_assoc($res);
                      $skillList .= $skill['SkillLabel'].' - ';
                    }
                    echo rtrim($skillList, " - ");
                  ?>
                  </td>
                </tr>
                <tr>
                  <td><b>Personal skills</b></td>
                  <td>
                  <?php
				  $pskillList="";
                    foreach ($persSkills as $ps) {
                      $sql = "SELECT * FROM `PersonalSkill` WHERE `PersonalSkillID` = '".$ps['PersonalSkillID']."'";
                      $res = mysqli_query($link, $sql);
                      $skill = mysqli_fetch_assoc($res);
                      $pskillList .= $skill['PersonalSkillLabel'].' - ';
                    }
                    echo rtrim($pskillList, " - ");
                  ?>
                  </td>
                </tr>
              </thead>
            </table>
            <p> </p>
            <div class="text-center">
			<form method="post" action="apply.php">
        <?php
          if (isset($role) && $role == 'student') {
            echo '<button formmethod="post" type = "submit" name="internship" value="'.$internshipID.'" class="btn btn-primary">Apply</div>';
          }
          else {
            echo '<br /><br />';
            echo '<div><p> You are a student and you want to apply ? <br /> Please <a href="student_login.php">sign in</a> or <a href="stu_sign_up">register</a>. </p></div>';
          }
        ?>
			 </form>
            </div>
          </div>
          <!-- Pager -->
          <!-- Blog Sidebar Widgets Column --> </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
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
      </div>
      <!-- /.container -->
      <!-- jQuery -->
      <script src="assets/libs/jquery/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="assets/libs/bootstrap/bootstrap.min.js"></script> </div>
  </body>
</html>
