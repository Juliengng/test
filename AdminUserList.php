<?php session_start();

if($_SESSION['username'] != null)
{
		$id =$_SESSION['username'];
		$role = $_SESSION['role'];

}

if(!isset($role) || $role != 'boardingates'){
  header('Location: index.php');
  exit();
}

require_once("mysql_connect.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User List</title>
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
      <div style="height: 22.4776px;" class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> <button type="button" class="navbar-toggle"

            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span> </button><a

            class="navbar-brand" href="index.php">Boardingates</a> </div>
        <?php
		if (isset($role) && $role == 'firm'){		?>
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
		}else if(isset($role) && $role == 'student'){		?>
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
		}else if(isset($role) && $role == 'ambassador'){		?>
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
            <li> <a href="AmbProfile.php" "="">Profile Page</a></li>
            <li><font color="white">Welcome To Boardingate</font>
              <form autocomplete="off" action="" name="name"><font color="white"><?php echo $id; ?></font>
              </form>
            </li>
            <li> <a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <?php
		} else {		?>
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
          <h1 class="page-header">User List </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">User List</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row"><b> </b>
        <section style="margin-left: 19px;" id="personalinfo"><br>
          <hr>
		  <!--
          <p> <button name="Students" formmethod="post" type = "submit" >Students</button> <button name="Ambassadors" formmethod="post" type = "submit" >Ambassadors</button>
            <button name="Firms" formmethod="post" type = "submit" >Firms</button>
			-->

			<!--Student part-->

			<h2>Student</h2>
			<table style="width: 100%" border="1">
              <tbody>
                <tr>
                  <td>User Name</td>
                  <td>Given Name</td>
                  <td>Surname</td>
                  <td>Gender</td>
                  <td>Date of Birth</td>
                  <td>Nationality</td>
                  <td>Contact No.</td>
                  <td>Mailing Address</td>
				  <td>Approval status</td>
				  <td>Approve Button</td>
                </tr>

			  <?php
						$sql = "SELECT
						`stu_personal_info`.`StuUsrName`,
						`stu_personal_info`.`Given Name`,
						`stu_personal_info`.`Surname`,
						`stu_personal_info`.`Gender`,
						`stu_personal_info`.`DateOfBirth`,
						`stu_personal_info`.`Nationality`,
						`stu_personal_info`.`ContactNumber` ,
						`stu_personal_info`.`MailingAddress`,
						`student`.`StuApproved`
						FROM `student`,`stu_personal_info` WHERE `stu_personal_info`.`StuUsrName` = `student`.`StuUsrName`";
						$result = mysqli_query($link, $sql);
						// $row = mysqli_fetch_row($result);

						while($row = mysqli_fetch_row($result)){
						?>
						<tr>
						  <td><?php echo $row[0];?></td>
						  <td><?php echo $row[1];?></td>
						  <td><?php echo $row[2];?></td>
						  <td><?php echo $row[3];?></td>
						  <td><?php echo $row[4];?></td>
						  <td><?php echo $row[5];?></td>
						  <td><?php echo $row[6];?></td>
						  <td><?php echo $row[7];?></td>
						  <td><?php if($row[8]){echo "approved";}else{echo "pending";}?></td>
						  <td> <form method="post" action=""><button formmethod="post" href="#" type = "submit" value="<?php echo $row[0]; ?>" name="Approval" class="btn btn-primary">Approval </div></form></td>
						</tr>
						<?php

						}


						if(isset($_POST['Approval'])&&!empty($_POST['Approval'])){
						$updateID = $_POST['Approval'];
						$sql = "UPDATE `student` SET `StuApproved`='1' WHERE `StuUsrName` ='$updateID' ";
						$result = mysqli_query($link, $sql);

						echo "<meta http-equiv=REFRESH CONTENT=0;url=AdminUserList.php>";
						}


					?>

              </tbody>
            </table>
            <p><br>
            </p>

			<!--AMB part-->
			<h2>Ambassador</h2>
            <table style="width: 100%" border="1">
              <tbody>
                <tr>
                  <td>User Name</td>
                  <td>Given Name</td>
                  <td>Surname</td>
                  <td>Gender</td>
                  <td>Date of Birth</td>
                  <td>Nationality</td>
                  <td>Contact No.</td>
                  <td>Mailing Address</td>
				  <td>Approval status</td>
				  <td>Approve Button</td>
                </tr>

			  <?php
						$sql = "SELECT `amb_personal_info`.`AmbUsrName`,
						`amb_personal_info`.`GivenName`,
						`amb_personal_info`.`Surname`,
						`amb_personal_info`.`Gender`,
						`amb_personal_info`.`DateOfBirth`,
						`amb_personal_info`.`Nationality`,
						`amb_personal_info`.`ContactNumber`,
						`amb_personal_info`.`MailingAddress`,
						`ambassador`.`Ambapproved`
						FROM `ambassador`,`amb_personal_info` WHERE `amb_personal_info`.`AmbUsrName` = `ambassador`.`AmbUsrName`";
						$result = mysqli_query($link, $sql);
						// $row = mysqli_fetch_row($result);

						while($row = mysqli_fetch_row($result)){
						?>
						<tr>
						  <td><?php echo $row[0];?></td>
						  <td><?php echo $row[1];?></td>
						  <td><?php echo $row[2];?></td>
						  <td><?php echo $row[3];?></td>
						  <td><?php echo $row[4];?></td>
						  <td><?php echo $row[5];?></td>
						  <td><?php echo $row[6];?></td>
						  <td><?php echo $row[7];?></td>
						  <td><?php if($row[8]){echo "approved";}else{echo "pending";}?></td>
						  <td> <form method="post" action=""><button formmethod="post" href="#" type = "submit" value="<?php echo $row[0]; ?>" name="Approval" class="btn btn-primary">Approval </div></form></td>
						</tr>
						<?php

						}


						if(isset($_POST['Approval'])&&!empty($_POST['Approval'])){
						$updateID = $_POST['Approval'];
						$sql = "UPDATE `ambassador` SET `Ambapproved`='1' WHERE `AmbUsrName` ='$updateID' ";
						$result = mysqli_query($link, $sql);

						echo "<meta http-equiv=REFRESH CONTENT=0;url=AdminUserList.php>";
						}


					?>

              </tbody>
            </table>
            <p><br>
            </p>

			<!--Firm part-->
			<h2>Firm</h2>
			<table style="width: 100%" border="1">
              <tbody>
                <tr>
                  <td>User Name</td>
                  <td>Firm Name</td>
                  <td>Registration Number</td>
                  <td>Insurance Number</td>
                  <td>Employee Number</td>
				  <td>Approval status</td>
				  <td>Approve Button</td>
                </tr>

			  <?php
						$sql = "SELECT `firm_info`.`FirmUsrName` ,
						`firm_info`.`FirmName`,
						`firm_info`.`FirmRegNum`,
						`firm_info`.`FirmInsuranceNum`,
						`firm_info`.`EmpolyeeNum`,
						`firm`.`FirmApproved`
						FROM `firm`, `firm_info` WHERE `firm_info`.`FirmUsrName` = `firm`.`FirmUsrName`";
						$result = mysqli_query($link, $sql);
						// $row = mysqli_fetch_row($result);

						while($row = mysqli_fetch_row($result)){
						?>
						<tr>
						  <td><?php echo $row[0];?></td>
						  <td><?php echo $row[1];?></td>
						  <td><?php echo $row[2];?></td>
						  <td><?php echo $row[3];?></td>
						  <td><?php echo $row[4];?></td>
						  <td><?php if($row[5]){echo "approved";}else{echo "pending";}?></td>
						  <td> <form method="post" action=""><button formmethod="post" href="#" type = "submit" value="<?php echo $row[0]; ?>" name="Approval" class="btn btn-primary">Approval </div></form></td>
						</tr>
						<?php

						}


						if(isset($_POST['Approval'])&&!empty($_POST['Approval'])){
						$updateID = $_POST['Approval'];
						$sql = "UPDATE `firm` SET `FirmApproved`='1' WHERE `FirmUsrName` ='$updateID' ";
						$result = mysqli_query($link, $sql);

						echo "<meta http-equiv=REFRESH CONTENT=0;url=AdminUserList.php>";
						}


					?>

              </tbody>
            </table>
            <p><br>
            </p>

            <p><br>
            </p>
            <p></p>
            <p></p>
            <p> <a class="btn btn-primary">Back</a> </p>
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
