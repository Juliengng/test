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
				   `DateOfAvailibality`, `Hours`, `Minutes`
				FROM
				  `Availibale`,`Availibality`,`ambassador`
				WHERE 
					`ambassador.ambassadorID=Availibale.ambassadorID`
                  GROUP BY  `Month`
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arrayDateOfAvailibality[]=$row[0];
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
    <title>Boardingates</title>
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
		 if(isset($role) && $role == 'student'){
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
		}?>
        
        
        <!-- /.navbar-collapse --> </div>
      <!-- /.container --> </nav>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Choix de créneau
            <!--<small>Subheading</small>--> </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Choix de créneau</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="container">
		
			<form method="post" action="">
			  <p> <span class="custom-dropdown"> 
				  <select name="Day">
					<option value="" disabled="disabled" selected="selected">houb</option>
					<?php 
						foreach($arrayDateOfAvailibality as $DateOfAvailibality)
							{
							?><option><?php echo "$DateOfAvailibality GMT ";?></option><?php
						}
					?>
					
				  </select> 
				</span></p>
			
			  
			  

			  <input type="submit" name="suivant" value="suivant" href="#" class="btn btn-primary">
			 
			</form>
          <hr width="100%">
          <div class="col-md-24 col-sm-24">
		 
			
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
