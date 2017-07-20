<?php 
session_start(); 
include("mysql_connect.inc.php");

if (isset($_SESSION['username']))
{
	//select sql for check username and password
				
				$id = $_SESSION['username'] ;
				$role = $_SESSION['role'];
}

	//for drop down menu in searching 
			
				$sql = "
				SELECT
				   `JobCategory`
				FROM
				  `StuPostAds`
                  GROUP BY  `JobCategory`
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arrayJobCategory[]=$row[0];
				}
				$sql = "
				SELECT
				  `Language`
				FROM
				  `StuPostAds`
                  GROUP BY `Language`
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arrayLanguage[]=$row[0];
				}
				$sql = "
				SELECT
				  `JobTitle`
				FROM
				  `StuPostAds`
                  GROUP BY  `JobTitle`
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arrayJobTitle[]=$row[0];
				
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
    <title>Search Applicant</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          
          <!-- bar -->
       <?php 
		if (isset($role) && $role == 'firm'){
		?>
		
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="SearchIntern.php">Search Internship</a> </li>
		<li> <a href="SearchApplicant.php">Search Applicant</a> </li>
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
		<li> <a href="SearchApplicant.php">Search Applicant</a> </li>
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
		<li> <a href="SearchApplicant.php">Search Applicant</a> </li>
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
	    <li> <a href="SearchApplicant.php">Search Applicant</a> </li>
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
          <h1 class="page-header">Search Applicant
            <!--<small>Subheading</small>--> </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Search Applicant</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="container">
		
			<form method="post" action="">
			  <p> <span class="custom-dropdown"> 
				  <select name="JobCategory">
					<option value="" disabled="disabled" selected="selected">Job Category</option>
					<?php 
						foreach($arrayJobCategory as $category){
							?><option><?php echo "$category";?></option><?php
						}
					?>
					
				  </select>
				</span></p>
			  <p> <span class="custom-dropdown">
				  <select  name="JobTitle" >
					<option value="" disabled="disabled" selected="selected">JobTitle</option>
					<?php 
						foreach($arrayJobTitle as $elementsJobTitle){
							?><option><?php echo "$elementsJobTitle";?></option><?php
						}
					?>
					
				  </select>
				</span> </p>
			  <p> <span class="custom-dropdown">
				  <select name="Language" >
					<option value="" disabled="disabled" selected="selected">Language</option>
					<?php 
						foreach($arrayLanguage as $elementslanguage){
							?><option><?php echo "$elementslanguage";?></option><?php
						}
					?>
					
				  </select>
				</span> </p>
			 
			  <input type="submit" name="search" value="search" href="#" class="btn btn-primary">
			  <?php 
				$sql = "SELECT `StuPostAds`.*FROM StuPostAds WHERE 1";
			  if(isset($_POST['JobCategory']))
			  {
				$JobCategory = $_POST['JobCategory'];
				$sql .= " AND `JobCategory` = '$JobCategory'";
			  }
			  if(isset($_POST['JobTitle']))
			  {
				$JobTitle= $_POST['JobTitle'];
				$sql .= " AND  `JobTitle` = '$JobTitle'";
			  }
			  if(isset($_POST['Language']))
			  {
				$Language = $_POST['Language'];
				$sql .= " AND `Language` = '$Language'";
			  }
			 
			  $result = mysqli_query($link, $sql);
			  
			  	  
			  ?>
			  
			  
			  
			  
			</form>
          <hr width="100%">
          <div class="col-md-24 col-sm-24">
		  <?php
		  if(!($row = mysqli_fetch_row($result))){
			  echo "No such Applicant, please choose another requirement.";
		  }else
		  {
			  do 
			  {
			  ?>
				<form method="post" action="IntenDetails.php">
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h4><?php echo $row[1]; ?></h4>
					  </div>
					  <div class="panel-body">
						<h4>Job Title:&nbsp;<?php echo $row[2]; ?></h4>
						<h4>Salary:&nbsp;<?php echo $row[3]; ?></h4>
						<h4>Language:&nbsp;<?php echo $row[4]; ?></h4>
						<h4>Description:&nbsp;<?php echo $row[5]; ?></h4>
						<h4>Location:&nbsp;<?php echo $row[6]; ?></h4>
						<h4>Posted by:&nbsp;<?php echo $row[7]; ?></h4>
						<h4>Start Date:&nbsp;<?php echo $row[8]; ?></h4>
						<h4>End Date:&nbsp;<?php echo $row[9]; ?></h4>
						
						 </div>
					</div>
				</form>
				<?php
			  }while($row = mysqli_fetch_row($result));
		  }
			?>
			
			<!--
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>Job Title</h4>
              </div>
              <div class="panel-body">
                <h4>Job Details</h4>
                <a href="#" class="btn btn-primary">Apply</a> </div>
            </div>
			-->
          </div>
          <!-- Pager -->
          <hr width="100%">
          <ul class="pager">
		  <!--
            <li class="previous"> <a href="#">← Previous</a> </li>
            <li class="next"> <a href="#">Next →</a> </li>
			-->
          </ul>
        </div>
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
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
