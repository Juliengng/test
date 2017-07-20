<?php session_start();

if(isset($_SESSION['username']))
{
		$id =$_SESSION['username'];
		$role = $_SESSION['role'];


		$sql ="
				SELECT
				`firm`.*,
				`firm_info`.`FirmUsrName`,
				`firm_info`.`FirmRegNum`,
				`firm_info`.`FirmInsuranceNum`,
				`firm_info`.`Supervisor`,
				`firm_info`.`FirmName`,
				`firm_info`.`NetProfit` ,
				`firm_info`.`EmpolyeeNum`,
				`firm_info`.`activity`,
				`firm_info`.`FirmSkypeAccount`
				FROM
				`firm`,`firm_info`
				WHERE
				`firm`.`FirmUsrName` = `firm_info`.`FirmUsrName`
				AND
				`firm`.`FirmUsrName` = '$id' ";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_row($result);

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
    <title>Firm Edit Profile Page</title>
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
          <h1 class="page-header">Firm Edit Profile </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Firm Edit profile</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <section style="margin-left: 26px;" id="accinfo">
          <div class="jumbotron">
		  <form method="post" action="">
            <h2>Account Information</h2>
            <p><br>
            </p>
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
			  <br/>
			<h2>Firm Information</h2>
				<p>Firm Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4];?></p>

			    <p>Firm Registration No.:&nbsp;&nbsp;<?php echo $row[5];?></p>

				<p>Firm Insurance No.: &nbsp; &nbsp; <input size="24" placeholder="Insurance No."
                name="Insuranceno" type="text"></p>

				<p>Firm Supervisor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <input
					size="36" placeholder="Name of Supervisor" name="Supervisor" type="text"></p>

				<p>Firm Employee No.:&nbsp; &nbsp;&nbsp; <input autocomplete="off"
					maxlength="5" size="24" placeholder="Staff No." name="staff_no"
					type="text"></p>

				<p> Firm Net Profit:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="custom-dropdown">
					<select name="netprofit">

					  <option value="" selected="selected">Range</option>
					  <option>0-500K</option>
					  <option>500K-1M</option>
					  <option>1M-5M</option>
					  <option>&gt;5M</option>
					</select>
				  </span> </p>

				<p>Firm Business Activity: <input autocomplete="off" maxlength="64"
					size="36" placeholder="Business Activity" name="BusinessActivity"
					type="text"><br>
				</p>

				<p>Skype Account: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input autocomplete="off" maxlength="64"
						size="36"
						placeholder="Skype Account"
						name="skype"
						type="text"><br>
				</p>
            <button style="width: 100px; margin-left: 908px;" href="firm_home.php" formmethod="post" type="submit" name="submit" value="submit" class="btn btn-primary text-center">Edit</button>

			</form>

			<?php

			if(isset ($_POST['submit'])&& $_POST['submit']=="submit"){
					$password = $_POST['password'];
					$newpassword = $_POST['newpassword'];
					$confirmpassword = $_POST['confirmpassword'];
					$Insuranceno = $_POST['Insuranceno'];
					$Supervisor = $_POST['Supervisor'];
					$staff_no = $_POST['staff_no'];
					$netprofit = $_POST['netprofit'];
					$BusinessActivity = $_POST['BusinessActivity'];
					$skype = $_POST['skype'];
				}
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				if(isset($_POST['submit'])){
					if($password!=$row[1]){
						$error[]="Wrong password, please try it again.";
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
					// update firm sheet
					$sql = "UPDATE `firm` SET `FirmUsrName`='$id' ";

					if(!empty($_POST['newpassword'])){

						$sql .= ",`FirmPassword`='$newpassword' ";
					}

					$sql .= "WHERE `FirmUsrName`='$id'; ";

					if(!empty($_POST['Address'])){

						$sql .= ",`FirmEmail`='$Address' ";
					}

					// udpate firm_info sheet

					$sql .= "UPDATE `firm_info` SET `FirmUsrName`='$id' ";


					if(!empty($_POST['Insuranceno'])){

						$sql .= ",`FirmInsuranceNum`='$Insuranceno' ";
					}
					if(!empty($_POST['Supervisor'])){

						$sql .= ",`Supervisor`='$Supervisor' ";
					}
					if(!empty($_POST['staff_no'])){

						$sql .= ",`EmpolyeeNum`='$staff_no' ";
					}
					if(!empty($_POST['netprofit'])){

						$sql .= ",`NetProfit`='$netprofit' ";
					}
					if(!empty($_POST['BusinessActivity'])){

						$sql .= ",`activity`='$BusinessActivity' ";
					}
					if(!empty($_POST['skype'])){

						$sql .= ",`FirmSkypeAccount`='$skype' ";
					}

					$sql .= "WHERE `FirmUsrName`='$id'; ";



					if($result =  mysqli_multi_query($link, $sql)){

						echo "<font color=\"blue\"> update successfully, go to home page in 3 seconds.</font>";
						echo "<meta http-equiv=REFRESH CONTENT=3;url=firm_home.php>";
					}else{

						echo $sql;
					}

				}



			?>
            <section id="personalinfo">
              <hr></section>
          </div>
          <section id="uinfo"><br>
            <br>
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
    </div>
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
