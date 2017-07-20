<?php
  session_start();

  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'student') {
    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
  }
  else {
    header('Location: login.php');
    exit();
  }

  require_once("mysql_connect.inc.php");

  $sql = "SELECT * FROM skill";
  $result = mysqli_query($link, $sql);
  $i = 0;
  if($result) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $skills[$i] = $row;
      $i++;
    }
  }

  $sql = "SELECT * FROM PersonalSkill";
  $result = mysqli_query($link, $sql);
  $i = 0;
  if($result) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $PersonalSkills[$i] = $row;
      $i++;
    }
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
    <title>CV</title>
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
          <a class="navbar-brand" href="index.php">Boardingates</a> </div>
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
            <li> <a href="CV.php">Register skills</a> </li>
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
          <h1 class="page-header">CV <br>
            &nbsp; </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">CV</li>
          </ol>
        </div>
      </div>
      <!--where you start-->

      <div class="jumbotron">
        <div class="container text-center">
          <p class="jumbtitle"><strong>My skills</strong></p>
        </div>
      </div>
      <div class="well col-sm-8 col-md-offset-2 wellbackground">
        <div class="col-sm-12 col-md-offset-2">
          <form class="form-horizontal" method="post" action="">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="input-group col-sm-8">
                    <h5>Practical Skills</h5>
                    <?php
                      $i = 1;
                      foreach ($skills as $skill) {
                        ?>
                    <div class="col-md-4">
                      <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillID"];?>"><?php echo "&nbsp".$skill["SkillLabel"];?>
                    </div>
                    <?php
                      if ($i%3 == 0) {
                        echo "<br>";
                      }
                      $i++;
                      }
                      ?>
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <div class="input-group col-sm-8">
                    <h5>Personal Skills</h5>
                    <?php
                      $i = 1;
                      foreach ($PersonalSkills as $PersonalSkill) {
                        ?>
                    <div class="col-md-4">
                      <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $PersonalSkill["PersonalSkillID"];?>"><?php echo "&nbsp".$PersonalSkill["PersonalSkillLabel"];?><br>
                    </div>
                    <?php
                      if ($i%3 == 0) {
                        echo "<br>";
                      }
                      $i++;
                      }
                      ?>
                  </div>
                </div>
                <div id="submit" class="col-md-8 col-md-offset-2">
                  <button class="btn btn-default" formmethod="post" type="submit" name="submit" value="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
		  <?php

			if(isset($_POST['submit']) && $_POST['submit']=="submit"){
				$id = $_SESSION['username'];
				$skills = $_POST['Skills'];
        $persSkills = $_POST['PersonalSkills'];
			}

			//check for any errors
			if(isset($error)){
				foreach($error as $error){
					echo '<p class="bg-danger">'.$error.'</p>';
				}
			}

			 if(isset($error)){
				foreach($error as $errrow){
					?>
					<br>
						<font color="red">
					<?php
					echo $errrow;
					?>
					</font>
					<?php
				}
			 }
			  // send sql to the DB

			  if(empty($error[0])){
				if (isset($_POST['submit'])&& $_POST['submit']== "submit"){
          foreach ($_POST['Skills'] as $s) {
            $insertSkill= "INSERT INTO `StudentSkills`(`StudentID`,`SkillID`) VALUES ('$id','$s')";
            $result = mysqli_query($link, $insertSkill) or trigger_error("Query Failed! SQL: $insertSkill - Error: ".mysqli_error(), E_USER_ERROR);;
          }
          foreach ($_POST['PersonalSkills'] as $ps) {
            $insertPersonalSkill= "INSERT INTO `StudentPersonalSkills`(`StudentID`,`PersonalSkillID`) VALUES ('$id','$ps')";
            $result = mysqli_query($link, $insertPersonalSkill) or trigger_error("Query Failed! SQL: $insertPersonalSkill - Error: ".mysqli_error(), E_USER_ERROR);;
          }
          echo '<meta http-equiv=REFRESH CONTENT=0;url=student_home.php>';
        }
			}

		  ?>
	  </form>
      <!--where you end-->

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
