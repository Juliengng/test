<?php session_start();

if (isset($_SESSION['username']))
{
	$id = $_SESSION['username'] ;
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
    <title>Ambassador Personal Information</title>
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
  <style type="text/css">
      body {
        background: url(assets/img/image3395-2_1366x666.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    p{
      color:black;
    }
</style>
  <body>

    <!-- Navigation -->
    <div class="row">
    <!-- Navigation -->
      <div class="header-nightsky" style="background: no-repeat" >
        <?php
        require ('components/navbar.php');?>

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Ambassador Personal Information Form <br>
            &nbsp; </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Ambassador personal information</li>
          </ol>
        </div>
      </div>
      <!--where you start-->
      <div class="row">
        <div class="col-lg-12">
          <div class="jumbotron">
            <h2>Ambassador Personal Information Form</h2>
            <p><br>
            </p>

			<form role="form" method="post" action="" autocomplete="off">

			<?php
			//check for any errors
			if(isset($error)){
				foreach($error as $error){
					echo '<p class="bg-danger">'.$error.'</p>';
				}
			}

			?>
            <p>Given Name :<input autocomplete="off" size="36" placeholder="GivenName"

                name="givenname" type="text"
				value="<?php if(isset($_POST['givenname'])){ echo $_POST['givenname']; } ?>"
				></p>
            <p>Surname : <input placeholder="Surname" autocomplete="off" size="24"

                name="surname" type="text"
				value="<?php if(isset($_POST['surname'])){ echo $_POST['surname']; } ?>"
				></p>
            <p class="lead">Gender:&nbsp;&nbsp;<input required="required" name="gender" value = "male"

            type="radio">Male <input required="required" name="gender" value = "female" type="radio">Female</p>
            <p>Date of Birth :<input size="36" placeholder="Date of Birth"

                name="dob" type="date"
				value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; } ?>"
				></p>
            <p>Nationality :&nbsp;<input placeholder="Nationality" name="nationality"

                type="text"
				value="<?php if(isset($_POST['nationality'])){ echo $_POST['nationality']; } ?>"
				> </p>
            <p>Mailing Address : <input placeholder="Mailing Address" name="mailingaddress"

                type="text"
				value="<?php if(isset($_POST['mailingaddress'])){ echo $_POST['mailingaddress']; } ?>"
				></p>
            <p>Contact Number : <input placeholder="Contact Number" name="contactnumber"

                type="text"
				value="<?php if(isset($_POST['contactnumber'])){ echo $_POST['contactnumber']; } ?>"
				></p>
            <p>Skype Account : <input placeholder="Skype Account" name="skypeaccount" type="text"></p>

            <p>&nbsp;Occupation : <input placeholder="Occupation" name="occupation"

                type="text"></p>
            <p>Personal Description : <input placeholder="Personal Description"

                name="personaldescription" type="text"></p>
				<button style="height:50px;width:200px" formnovalidate="formnovalidate"

          formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"

          name="next">Submit and next</button>

		    <?php

			if(isset($_POST['next']) && $_POST['next']=="submit"){
				$id = $_SESSION['username'];

				// info gathering
				$givenname = $_POST['givenname'];
				$surname = $_POST['surname'];
				$gender = $_POST['gender'];
				$dob = $_POST['dob'];
				$nationality = $_POST['nationality'];
				$mailingaddress = $_POST['mailingaddress'];
				$contactnumber = $_POST['contactnumber'];
				$skypeaccount = $_POST['skypeaccount'];
				$personaldescription = $_POST['personaldescription'];
				$occupation = $_POST['occupation'];



			  // basic checking

				if(!isset($_POST['givenname']) || strlen($_POST['givenname']) == 0){
					$error[] = 'Please fill in your given name.';
				}
				if(!isset($_POST['surname']) || strlen($_POST['surname']) == 0){
					$error[] = 'Please fill in your surname.';
				}
				if(!isset($_POST['gender'])  ){
					$error[] = 'Please select your gender.';
				}
				if(!isset($_POST['dob']) || strlen($_POST['dob']) == 0){
					$error[] = 'Please fill in your date of birth.';
				}
				if(!isset($_POST['nationality']) || strlen($_POST['nationality']) == 0){
					$error[] = 'Please fill in your nationality.';
				}

				if(!isset($_POST['mailingaddress']) || strlen($_POST['mailingaddress']) == 0){
					$error[] = 'Please fill in your mailing address.';
				}
				if(!isset($_POST['contactnumber']) || strlen($_POST['contactnumber']) == 0){
					$error[] = 'Please fill in your contact number.';
				}
				if(!isset($_POST['skypeaccount']) || strlen($_POST['skypeaccount']) == 0){
					$error[] = 'Please fill in your skype account.';
				}

				//check dates
				$dobYear =  date_diff(date_create($dob),date_create())->y ;
				$limit = 18;
				if($dobYear < $limit)
				{
					$error[] = "You are below $limit years old. You cannot be an ambassador.";
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
			if (isset($_POST['next'])&& $_POST['next']== "submit"){
				//$sql = "INSERT INTO `amb_personal_info`(`usrName`, `usrType`) VALUES ('$id', 'student');";
				//to be update the pic part
				$sql =  "INSERT INTO `amb_personal_info`
				(`AmbUsrName`, `GivenName`, `Surname`, `Gender`, `DateOfBirth`, `Nationality`, `MailingAddress`, `ContactNumber`, `SkypeAccount`,`Occupation`)
				VALUES ('$id','$givenname','$surname','$gender','$dob','$nationality','$mailingaddress','$contactnumber','$skypeaccount','$occupation')";



				if(mysqli_query($link, $sql)){
					?>
					<br>
					<?php
					echo '<meta http-equiv=REFRESH CONTENT=0;url=ambassador_home.php>';
					//echo 'registration success!';
				}
				else{
					?>
					<br>
					<?php
					echo 'registration fail!';
					echo $sql;
				}
			}
		  }

		  ?>
		  </form>
          </div>
        </div>
      </div>
      <hr>
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
