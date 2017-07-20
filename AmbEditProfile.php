<?php session_start();
require_once("mysql_connect.inc.php");

if(isset($_SESSION['username']))
{
		$id =$_SESSION['username'];
		$role = $_SESSION['role'];


		$sql ="
			SELECT
			  `ambassador`.*,
			  `amb_personal_info`.`AmbUsrName`,
			  `amb_personal_info`.`GivenName`,
			  `amb_personal_info`.`Surname`,
			  `amb_personal_info`.`DateOfBirth`,
			  `amb_personal_info`.`Nationality`,
			  `amb_personal_info`.`MailingAddress`,
			  `amb_personal_info`.`ContactNumber`
			FROM
			  `ambassador`,`amb_personal_info`
			WHERE
			  `ambassador`.`AmbUsrName` = `amb_personal_info`.`AmbUsrName`
				AND `ambassador`.`AmbUsrName` ='$id'
		";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_row($result);
}	if (isset($_SESSION['username']))
	{
			$id =$_SESSION['username'];
			$role = $_SESSION['role'];

			//displaying the member info from database
			$sql = "
					SELECT `AmbUsrName`, `GivenName`, `Surname`, `Gender`, `DateOfBirth`, `Nationality`
					FROM `amb_personal_info`
					WHERE `AmbUsrName` = '$id' ";
			$result = mysqli_query($link, $sql);
			$row = mysqli_fetch_row($result);
			$role = $_SESSION['role'];

	}
  else {
    header('Location: login.php');
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
    <title>Ambassador Edit Profile Form</title>
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
          <h1 class="page-header">Ambassador Edit Profile </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Ambassador Edit profile</li>

          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row"><b> </b>
        <div class="col-lg-12"><b>
            <style type="text/css"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}--></style></b>
          <b> </b>
          <div class="col-md-4 col-sm-8">
            <div class="panel panel-default text-center">
              <div class="panel-heading"><a href="#accinfo" class="page-scroll">Account
                  Information</a></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-8">
            <div class="panel panel-default text-center">
              <div class="panel-heading"><a href="#personalinfo" class="page-scroll">Personal
                  Information</a></div>
            </div>
          </div>
        </div>
        <section style="margin-left: 26px;" id="accinfo">
          <hr>
		  <form method="post" action="">
			  <h2 style="margin-left: 1px;">Account Information</h2>
			  <p class="lead">Username:&nbsp; <?php echo $id;?>
			  </p>
				  <p class="lead">Password :&nbsp; <input autocomplete="off"

					  maxlength="16" size="48" required="required" placeholder="Enter your password to edit your information"

					  name="password" type="password"></p>

				  <p class="lead">New Password :&nbsp; <input autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"

					  maxlength="16" size="24" placeholder="Enter your new password"

					  name="newpassword" type="password"></p>
				  <p class="lead">Confirm your password: <input autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"

					  maxlength="16" size="24"  placeholder="Enter your new password again"

					  name="confirmpassword" type="password"></p>
			  <section id="personalinfo"><br>
				<hr>
				<h2>Personal Information</h2>
				<p class="lead">Given name:&nbsp; <?php echo $row[6];?></p>
					<p class="lead">Surname :&nbsp; <?php echo $row[7];?></p>
					<p class="lead">Date of Birth: <?php echo $row[8];?></p>
					<p class="lead">Nationality:&nbsp;
					  <select name="Nationality">
					  <option value="" selected="selected">Nationality</option>
					  <option>Belgium</option>
					  <option>Brazil</option>
					  <option>Canada</option>
					  </select>
					</p>
				<p class="lead">Mailing address:<input autocomplete="off"

						maxlength="48" size="48" placeholder="Enter your address"

						name="Address" type="text"></p>
				<p class="lead">Contact number:<input autocomplete="off"

					maxlength="16" size="24" placeholder="Enter your contact number"

					name="contact number" type="text"></p>

				<p class="lead">Skype account:<input autocomplete="off"

					maxlength="16" size="24" placeholder="Enter your Skype account"

					name="skype" type="text"></p>


				<button style="width: 100px; margin-left: 908px;" formmethod="post" type="submit" name="submit" value="submit" class="btn btn-primary text-center">Edit</button>

			</form>
				</section>
            <?php

			if(isset ($_POST['submit'])&& $_POST['submit']=="submit"){
					$password = $_POST['password'];
					$newpassword = $_POST['newpassword'];
					$confirmpassword = $_POST['confirmpassword'];
					$Nationality = $_POST['Nationality'];
					$Address = $_POST['Address'];
					$contact_number = $_POST['contact_number'];
					$skype = $_POST['skype'];
				}
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_POST['submit'])){
					if(mysqli_num_rows($result)>0){
						if($password!=$row[1]){
							$error[]="Wrong password, please try it again. "."typed:";
						}
					}else{
						$sql ="
							SELECT
							  `ambassador`.*
							FROM
							  `ambassador`
							WHERE
							  `ambassador`.`AmbUsrName` ='$id'
						";
						$forEmptyAmbPersonalInfo = mysqli_query($link, $sql);
						$ambassador = mysqli_fetch_row($forEmptyAmbPersonalInfo);
						if($password!=$ambassador[1]){
							$error[]="Wrong password, please try it again. "."typed:";
						}
					}
					if(!empty($_POST['newpassword'])){
						if(empty($_POST['confirmpassword'])||$newpassword != $confirmpassword ){
							$error[]="New password mismatch. Please try it again.";
						}


						if(!preg_match("#[0-9]+#",$_POST['newpassword'])) {
						   $error[] = "Password should contain at least 1 number!";
						}

						if(!preg_match("#[A-Z]+#",$_POST['newpassword'])) {
							$error[] = "Password should contain at least 1 capital letter!";
						}

						if(!preg_match("#[a-z]+#",$_POST['newpassword'])) {
							$error[] = "Password should contain at least 1 lowercase letter!";
						}
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

				if(empty($error[0])&& isset($_POST['submit']) && $_POST['submit']=="submit"){
					// update ambassador sheet
					$sql = "UPDATE `ambassador` SET `AmbUsrName`='$id' ";

					if(!empty($_POST['newpassword'])){

						$sql .= ",`AmbPassword`='$newpassword' ";
					}

					$sql .= "WHERE `AmbUsrName`='$id'; ";


					// udpate amb_personal_info sheet

					$sql .= "UPDATE `amb_personal_info` SET `AmbUsrName`='$id' ";

					if(!empty($_POST['Nationality'])){

						$sql .= ",`Nationality`='$Nationality' ";
					}
					if(!empty($_POST['Address'])){

						$sql .= ",`MailingAddress`='$Address' ";
					}
					if(!empty($_POST['contact_number'])){

						$sql .= ",`ContactNumber`='$contact_number' ";
					}
					if(!empty($_POST['skype'])){

						$sql .= ",`SkypeAccount`='$skype' ";
					}

					$sql .= "WHERE `AmbUsrName`='$id'; ";



					if($result =  mysqli_multi_query($link, $sql)){

						echo "<font color=\"blue\"> update successfully, go to profile page in 3 seconds.</font>";
						echo "<meta http-equiv=REFRESH CONTENT=3;url=AmbProfile.php>";
					}else{

						echo $sql;
					}

				}



			?>


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
