<?php session_start(); 

include("mysql_connect.inc.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student University Information</title>
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
          <h1 class="page-header">Student University Information <br>
            &nbsp; </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Student university information</li>
          </ol>
        </div>
      </div>
	  
	  
	  
	  
	  
      <!--where you start-->
      <div class="row">
        <div class="col-lg-12">
          <div class="jumbotron">
		  <div class="featurette" id="about"> <img style="width: 338px; height: 271px;"

          class="featurette-image img-circle img-responsive pull-right" src="http://placehold.it/500x500">
        <h2 class="featurette-heading"><span class="text-muted">Student
            University Information Form<br>
          </span></h2>
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
		
		
        <p class="lead">University Name: <input autocomplete="off" pattern="6"

            maxlength="50" size="24" required="required" placeholder="Enter your University Name"
			
			
			value="<?php if(isset($_POST['uname'])){ echo $_POST['uname']; } ?>"
			

            name="uname" type="text"></p>
        <p class="lead">Country: <input autocomplete="off" 
		
		
			value="<?php if(isset($_POST['country'])){ echo $_POST['country']; } ?>"
		

            maxlength="16" size="24" required="required" placeholder="Country" name="country"

            type="text"></p>
        <p class="lead">University Address:&nbsp;<input placeholder="University Address"
		
		
		value="<?php if(isset($_POST['uaddr'])){ echo $_POST['uaddr']; } ?>"

            name="uaddr" type="text"></p>
        <p class="lead">*GPA:&nbsp;&nbsp;<input placeholder="GPA" name="gpa" type="text"></p>
        <p class="lead">Expected Graduation Time: <input autocomplete="on" pattern="6"
		
		
		value="<?php if(isset($_POST['expectedgraduationtime'])){ echo $_POST['expectedgraduationtime']; } ?>"

            maxlength="16" size="24" required="required" placeholder="Expected graduation year"

            name="expectedgraduationtime" type="year"></p>
        <p class="lead">Supervisor Name:&nbsp; <input autocomplete="off" pattern="6"

            maxlength="16" size="24" required="required" placeholder="Supervisor name"
			
			
			value="<?php if(isset($_POST['supervisorname'])){ echo $_POST['supervisorname']; } ?>"

            name="supervisorname" type="text"></p>
        <p class="lead">Supervisor Contact Number:&nbsp;&nbsp;<input placeholder="Supervisor Contact Number"
		
		
		value="<?php if(isset($_POST['supervisorcontactnumber'])){ echo $_POST['supervisorcontactnumber']; } ?>"

            name="supervisorcontactnumber" type="text"></p>
        <p class="lead">Supervisor Email:&nbsp; <input autocomplete="off" pattern="6"

            maxlength="16" size="24" required="required" placeholder="Supervisor's mailing address"
			
			
			value="<?php if(isset($_POST['supervisoremail'])){ echo $_POST['supervisoremail']; } ?>"

            name="supervisoremail" type="text"></p>
        <button style="height:50px;width:200px" formnovalidate="formnovalidate"

          formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"

          name="next">Submit and next</button> </div>
		  
		  <?php

			if(isset($_POST['next']) && $_POST['next']=="submit"){
				$id = $_SESSION['username'];
			
				// info gathering
				$university = $_POST['uname'];
				$country = $_POST['country'];
				$address = $_POST['uaddr'];
				$gpa = $_POST['gpa'];
				$expectedgraduationtime = $_POST['expectedgraduationtime'];
				$supervisorname = $_POST['supervisorname'];
				$supervisorcontactnumber = $_POST['supervisorcontactnumber'];
				$supervisoremail = $_POST['supervisoremail'];

			
			
			  // basic checking
			  
				if(!isset($_POST['uname']) || strlen($_POST['uname']) == 0){
					$error[] = 'Please fill in your university name.';
				}
				if(!isset($_POST['country']) || strlen($_POST['country']) == 0 ){
					$error[] = 'Please fill in the contry of your university.';
				}
				if(!isset($_POST['uaddr']) || strlen($_POST['uaddr']) == 0){
					$error[] = 'Please select your university\'s address.';
				}
				if(!isset($_POST['gpa']) || strlen($_POST['gpa']) == 0){
					$error[] = 'Please fill in your GPA.';
				}
				if(!isset($_POST['expectedgraduationtime']) || strlen($_POST['expectedgraduationtime']) == 0){
					$error[] = 'Please fill in the expected graduation year.';
				}
				if(!isset($_POST['supervisorname']) || strlen($_POST['supervisorname']) == 0){
					$error[] = 'Please fill in your supervisor\'s name.';
				}
				if(!isset($_POST['supervisorcontactnumber']) || strlen($_POST['supervisorcontactnumber']) == 0){
					$error[] = 'Please fill in your supervisor\'s contact number.';
				}
				if(!isset($_POST['supervisoremail']) || strlen($_POST['supervisoremail']) == 0){
					$error[] = 'Please fill in your supervisor\'s email address.';
				}
				
				//check dates
				
				
				if($expectedgraduationtime - date("Y") < 0 )
				{
					$error[] = "You have graduated. You cannot apply any internship.";
				}
				
				// check email
				if(!filter_var($_POST['supervisoremail'], FILTER_VALIDATE_EMAIL))
				{
					$error[] = 'Please enter a valid email address';
				}
				
				if (!isset($_POST['gpa']) || $_POST['gpa']> 4.3 || $_POST['gpa']< 0){
					
					$error[] = 'Please enter a valid GPA';
					
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
				//$sql = "INSERT INTO `stu_personal_info`(`usrName`, `usrType`) VALUES ('$id', 'student');";
				$sql =  "
				INSERT INTO `uinfo`(`StuUsrName`, `UName`, `Country`, `UAddress`, `GPA`, `ExpectedGradTime`, `SupervisorName`, `SupervisorTel`, `SupervisorEmail`)
				VALUES ('$id','$university','$country','$address','$gpa','$expectedgraduationtime','$supervisorname','$supervisorcontactnumber','$supervisoremail')
				";
				
				

				
				
				if(mysqli_query($link, $sql)){
					?>
					<br>
					<?php
					echo '<meta http-equiv=REFRESH CONTENT=0;url=CV.php>';
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

      <hr>
	  
	  <!--GPA table-->
	<table style="width:100%">
		<caption>*GPA</caption>
		  <tbody>
			<tr>
				<th>Letter Grade</th>
				<th>Grade Point</th>
				<th colspan="2">Grade Definitions</th>
			</tr>
			<tr>
				<td>A+<br>
				A<br>
				A-</td>
				<td>4.3<br>
				4.0<br>
				3.7</td>
				<td>Excellent</td>
				<td>Strong evidence of original thinking; good organization, capacity to analyse and synthesize; superior grasp of subject matter; evidence of extensive knowledge base.</td>
			</tr>
			<tr>
				<td>B+<br>
				B<br>
				B-</td>
				<td>3.3<br>
				3.0<br>
				2.7</td>
				<td>Good</td>
				<td>Evidence of grasp of subject, some evidence of critical capacity and analytic ability; reasonable understanding of issues; evidence of familiarity with literature.</td>
			</tr>
			<tr>
				<td>C+<br>
				C<br>
				C-</td>
				<td>2.3<br>
				2.0<br>
				1.7</td>
				<td>Adequate</td>
				<td>Student who is profiting from the university experience; understanding of the subject; ability to develop solutions to simple problems in the material.</td>
			</tr>
			<tr>
				<td>D</td>
				<td>1.0</td>
				<td>Marginal</td>
				<td>Sufficient familiarity with the subject matter to enable the student to progress without repeating the course.</td>
			</tr>
			<tr>
				<td>F</td>
				<td>0.0</td>
				<td>Failure</td>
				<td>Little evidence of familiarity with the subject matter; weakness in critical and analytic skills; limited, or irrelevant use of literature.</td>
			</tr>
		</tbody>
	</table>
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
