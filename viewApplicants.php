<?php session_start();

if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'firm') {
  		$id =$_SESSION['username'];
  		$role = $_SESSION['role'];

  }
  else {
    header('Location: login.php');
    exit();
  }

  require_once("mysql_connect.inc.php");

  if(isset($_POST['internship'])) {
  	$internshipID = $_POST['internship'];

  	$sql = "SELECT * FROM `internship` WHERE InternshipID = '$internshipID'";
  	$result = mysqli_query($link, $sql);
  	$internship = mysqli_fetch_assoc($result);

    $sql = "SELECT skill.skillLabel FROM skill JOIN InternshipSkills ON skill.skillID = InternshipSkills.skillID WHERE InternshipID = '$internshipID'";
    $result = mysqli_query($link, $sql);
    $internSkills = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql = "SELECT PersonalSkill.PersonalSkillLabel FROM PersonalSkill JOIN InternshipPersonalSkills ON PersonalSkill.PersonalSkillID = InternshipPersonalSkills.PersonalSkillID WHERE InternshipID = '$internshipID'";
    $result = mysqli_query($link, $sql);
    $internPersSkills = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($internSkills as $is) {
      $internSkillList .= $is['skillLabel'].' - ';
    }

    foreach ($internPersSkills as $ips) {
      $internPersSkillList .= $ips['PersonalSkillLabel'].' - ';
    }

    // Get skills associés à l'annonce pour affichage

    $sql = "SELECT * FROM `application` WHERE InternshipID = '$internshipID' ORDER BY `match` DESC";
  	$result = mysqli_query($link, $sql);
  	$applications = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>Applicants</title>
    <style>
    .progress-bar[aria-valuenow="0"] {
      color: gray;
      min-width: 100%;
      background: transparent;
      box-shadow: none;
    }
    </style>
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

            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php">Boardingates</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
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
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
      <!-- Page Content -->
      <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Applicants </h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a> </li>
              <li><a href="firm_home.php">firm home</a> </li>
              <li class="active">applicants</li>
            </ol>
          </div>
        </div>

        <div class="jumbotron text-center">
          <h2><?php echo '#'.$internshipID.' - '.$internship['JobTitle'];?></h2>
          <h3><?php echo $internship['Description'];?></h3>
          <h4><?php echo rtrim($internSkillList, " - ");?></h4>
          <h4><?php echo rtrim($internPersSkillList, " - ");?></h4>
        </div>

        <?php
          if (!empty($applications)) {
            foreach ($applications as $application) {
              $match = $application['match'];
              $skillList = "";
              $pskillList = "";

              $sql = "SELECT skill.skillLabel FROM StudentSkills JOIN skill ON skill.skillID = StudentSkills.skillID WHERE StudentID = '".$application['StuUsrName']."'";
            	$result = mysqli_query($link, $sql);
            	$skills = mysqli_fetch_all($result, MYSQLI_ASSOC);

              $sql = "SELECT PersonalSkill.PersonalSkillLabel FROM StudentPersonalSkills JOIN PersonalSkill ON PersonalSkill.PersonalSkillID = StudentPersonalSkills.PersonalSkillID WHERE StudentID = '".$application['StuUsrName']."'";
            	$result = mysqli_query($link, $sql);
            	$persSkills = mysqli_fetch_all($result, MYSQLI_ASSOC);

              foreach ($skills as $s) {
                $skillList .= $s['skillLabel'].' - ';
              }

              foreach ($persSkills as $ps) {
                $pskillList .= $ps['PersonalSkillLabel'].' - ';
              }
        ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                <h4><?php echo $application['StuUsrName']; ?></h4>
                </div>
                <div class="panel-body">
                <h4>Skills : </h4>
        <?php
              echo rtrim($skillList, " - ");
              echo '<br />';
              echo rtrim($pskillList, " - ");
              echo '<br /><br />';

              echo '<h4>Matching percentage :</h4>';

              if ($match == 0) {
        ?>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $match ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $match ?>%">
                    <?php echo $match ?>%
                  </div>
                </div>
        <?php
              }
            else  if ($match <= 40) {
        ?>
                <div class="progress">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $match ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $match ?>%">
                    <?php echo $match ?>%
                  </div>
                </div>
        <?php
              }
              else if ($match <= 80) {
        ?>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $match ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $match ?>%">
                    <?php echo $match ?>%
                  </div>
                </div>
        <?php
              }
              else {
        ?>
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $match ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $match ?>%">
                    <?php echo $match ?>%
                  </div>
                </div>
        <?php
              }
        ?>
              <!-- <button formmethod="post" type = "submit" name="internship" value="<?php //echo $row['InternshipID']; ?>" class="btn btn-primary">Details </div> -->
              </div>
            </div>
        <?php
          }
        }
        else {
          echo '<h2>There is no applicant for this internship</h2>';
        }
        ?>

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
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
