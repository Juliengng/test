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

  //displaying the member info from database
  $sql = "
  SELECT `FirmUsrName`, `FirmRegNum`, `FirmInsuranceNum`, `Supervisor`, `FirmName`, `NetProfit` , `EmpolyeeNum`, `activity`, `FirmSkypeAccount`
  FROM `firm_info`
  WHERE `FirmUsrName` = '$id' ";
  $result = mysqli_query($link, $sql);
  $firmInfos = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Firm Homepage</title>
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
          <h1 class="page-header">Firm Home </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Firm Home</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row"><b>
          <div class="col-lg-12">
            <section id="intern"><br><br>
              <hr>
              <h2>Manage your Internships</h2>
      		<?php

      				$sql = "
      				SELECT
                `InternshipID`,
      				  `JobTitle`,
      				  `JobCategory`,
      				  `Description`,
      				  `DurationStart`,
      				  `DurationEnd`,
      				  `Location`,
      				  `Quota`,
      				  `Salary`,
      				  `Language`
                FROM
        				  `internship`
        				WHERE `FirmUsrName` = '$id'";
      				$result = mysqli_query($link, $sql);
      		 ?>

              <table style="width: 1142px; height: 66px;" border="1">
                <tbody>
                  <tr>
      			        <td>N°</td>
                    <td>Title</td>
      			        <td>Category</td>
      			        <td>Description</td>
                    <td>Starting Date</td>
                    <td>Ending Date</td>
      			        <td>Location</td>
      			        <td>Quota</td>
      			        <td>Salary</td>
      			        <td>Language</td>
                    <td>Applicants</td>
                  </tr>

      			<?php
      				while($internships = mysqli_fetch_assoc($result)) {
                $sql = "SELECT * FROM `language` WHERE `LanguageID` = '".$internships['Language']."'";
        				$res = mysqli_query($link, $sql);
                $language = mysqli_fetch_assoc($res);

                $sql = "SELECT * FROM `country` WHERE `CountryID` = '".$internships['Location']."'";
        				$res = mysqli_query($link, $sql);
                $location = mysqli_fetch_assoc($res);

                $sql = "SELECT COUNT(*) FROM `application` WHERE `InternshipID` = '".$internships['InternshipID']."'";
        				$res = mysqli_query($link, $sql);
                $applicants = mysqli_fetch_row($res);
      					?>
      					<tr>
      						<td>
                    <form method="post" action="InternDetails.php">
            						<button formmethod="post" type = "submit" name="internship" value="<?php echo $internships['InternshipID']; ?>" class="btn btn-default btn-small"><?php echo "#".$internships['InternshipID'] ?></div>
            				</form>
                  </td>
      						<td><?php echo $internships['JobTitle']?></td>
      						<td><?php echo $internships['JobCategory']?></td>
      						<td><?php echo $internships['Description']?></td>
      						<td><?php echo $internships['DurationStart']?></td>
      						<td><?php echo $internships['DurationEnd']?></td>
      						<td><?php echo $location['CountryName']?></td>
      						<td><?php echo $internships['Quota']?></td>
      						<td><?php echo $internships['Salary']?></td>
      						<td><?php echo $language['LanguageLabel']?></td>
                  <td>
                    <div class="col-md-6 col-md-offset-3">
                      <form method="post" action="viewApplicants.php">
                        <button formmethod="post" type = "submit" name="internship" value="<?php echo $internships['InternshipID']; ?>" class="btn btn-info btn-sm"><?php echo $applicants[0] ?></div>
              				</form>
                    </div>
                  </td>
      					</tr>
      					<?php
      				}
      			?>
                </tbody>
              </table>
            </section>

            <p><br>
            </p>
            <p><b><b> </b>
                <style type="text/css"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}--></style></b></p>
            <b>
              <div class="col-md-4 col-sm-8">
                <div class="panel panel-default text-center">
                  <div class="panel-heading"> <img style="width: 238px; height: 228px;"

                      src="assets/img/profile.jpg"><br>
                  </div>
                  <div class="panel-body">
                    <h2>Firm Information</h2>
                    <a href="#firminfo" class="btn btn-primary page-scroll">View/Edit</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="panel panel-default text-center">
                  <div class="panel-heading"> <b><b><img style="width: 238px; height: 228px;"

                          src="assets/img/profile.jpg"></b></b>
                  </div>
                  <div class="panel-body">
                    <h2>My Internships</h2>
                    <a href="#intern" class="btn btn-primary page-scroll">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="panel panel-default text-center">
                  <div class="panel-heading"> <b><b><img style="width: 238px; height: 228px;"

                          src="assets/img/profile.jpg"></b></b>
                  </div>
                  <div class="panel-body">
                    <h2>New Internship</h2>
                    <a href="FirmPostIntern.php" class="btn btn-primary page-scroll">Add</a>
                  </div>
                </div>
              </div>
            </b></div>
        </b> </div>
      <br>
	  <section id="firminfo"><br>
		<hr>
		<h2>Firm Information</h2>
		  <div class="jumbotron">
			<p>Firm Name:<?php echo $firmInfos['FirmUsrName'] ?></p>
			<p>Firm Registration No.: <?php echo $firmInfos['FirmRegNum'] ?></p>
			<p>Firm Insurance No.:<?php echo $firmInfos['FirmInsuranceNum'] ?></p>
			<p>Firm Supervisor:<?php echo $firmInfos['Supervisor'] ?></p>
			<p>Firm Employee No.:<?php echo $firmInfos['FirmName'] ?></p>
			<p>Firm Net Profit:<?php echo $firmInfos['NetProfit'] ?></p>
			<p>Firm Business Activity:<?php echo $firmInfos['activity'] ?></p>
			<a href="FirmEditProfile.php" class="btn btn-primary">Edit</a> </div>
	   </section>
		  <br>



      <section id="newintern"><br>
        <hr>
        <h2>New Internship</h2>
        <div class="row">
          <div class="col-lg-12">

              <a href="FirmPostIntern.php" class="btn btn-primary">Add</a></div>
          </div>
        </div>
      </section>
      <br>
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
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
