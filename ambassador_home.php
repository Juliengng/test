<?php session_start();
include("mysql_connect.inc.php");

if (isset($_SESSION['username']))
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

//for drop down menu in searching

	$sql = "
	SELECT
	   `JobCategory`
	FROM
	  `internship`
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
	  `internship`
	  GROUP BY `Language`
	";
	$result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_row($result))
	{
		$arrayLanguage[]=$row[0];
	}
	$sql = "
	SELECT
	  `Location`
	FROM
	  `internship`
	  GROUP BY  `Location`
	";
	$result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_row($result))
	{
		$arrayLocation[]=$row[0];
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
    <title>Ambassador Homepage</title>
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
          <h1 class="page-header">Ambassador Home </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Ambassador Home</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row"><b>
          <div class="col-lg-12">
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
                    <h2>Personal Information</h2>
                    <a href="#personalinfo" class="btn btn-primary page-scroll">Learn
                      More</a> </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="panel panel-default text-center">
                  <div class="panel-heading"> <b><b><img style="width: 238px; height: 228px;"

                          src="assets/img/profile.jpg"></b></b>
                  </div>
                  <div class="panel-body">
                    <h2>Internship History</h2>
                    <a href="#internhis" class="btn btn-primary page-scroll">Learn
                      More</a> </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="panel panel-default text-center">
                  <div class="panel-heading"> <b><b><img style="width: 238px; height: 228px;"

                          src="assets/img/profile.jpg"></b></b>
                  </div>
                  <div class="panel-body">
                    <h2>Search Internship</h2>
                    <a href="#searchintern" class="btn btn-primary page-scroll">Learn
                      More</a> </div>
                </div>
              </div>
            </b></div>
        </b> </div>
      <section id="personalinfo"><br>
        <br>
        <hr>
        <h2>Personal Information</h2>
        <h4>Given Name: <?php echo $row[1] ?></h4>
        <h4>Surname: <?php echo $row[2] ?></h4>
        <h4>Gender: <?php echo $row[3] ?></h4>
        <h4>Date of Birth: <?php echo $row[4] ?></h4>
        <h4>Nationality: <?php echo $row[5] ?></h4>
        <a href="AmbEditProfile.php" class="btn btn-primary">Edit</a> </section>
      <section id="internhis"><br>
         <hr>
         <h2>Internship History</h2>

		 <?php

				$sql = "
				SELECT
				  `firm_info`.`FirmName`,
				  `internship`.`JobTitle`,
				  `internship`.`InternshipID`
				FROM
				  `internship`,
				  `firm_info`
				WHERE `internship`.`PostedBy` = '$id'
				  AND `internship`.`FirmUsrName` = `firm_info`.`FirmUsrName`
				";
				$result = mysqli_query($link, $sql);
				$height = 30 * mysqli_num_rows($result);

		 ?>

        <table style="width: 1142px; height: <?php echo $height; ?>px;" border="1">
          <tbody>
            <tr>
              <td><br>
              </td>
              <td>Company Name</td>
              <td style="margin-left: -108px;">Position</td>
              <td>Ref#</td>
            </tr>

			<?php

				$i = 0;
				while($row = mysqli_fetch_row($result))
				{
					$i++;
					?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row[0]?></td>
						<td><?php echo $row[1]?></td>
						<td><a href="">#<?php echo $row[2]?></a></td>
					</tr>
					<?php
				}
			?>

			<!--
            <tr>
              <td>1</td>
              <td>Company Name</td>
              <td>Programmer</td>
              <td>Processing</td>
              <td><a href="">#101</a></td>
            </tr>

			-->
          </tbody>
        </table>

      </section>

      <section id="applicant"><br>
         <hr>
         <h2>Applicant Result</h2>
        <table style="width: 1142px; height: <?php echo $height; ?>px;" border="1">
          <tbody>
            <tr>
              <td>Company Name</td>
              <td style="margin-left: -108px;">Position</td>
              <td>Student User Name</td>
              <td>Matching percentage</td>
            </tr>


		 <?php

				$sql = "
				SELECT
				  `internship`.`InternshipID`,
				  `firm_info`.`FirmName`,
				  `internship`.`JobTitle`,
				  `preference`.*
				FROM
				  `preference`,
				  `firm_info`,
				  `internship`
				WHERE `internship`.`PostedBy` = '$id'
				  AND `internship`.`PrefID` = `preference`.`PrefID`
				  AND `internship`.`FirmUsrName` = `firm_info`.`FirmUsrName`;
				";
				$preference = mysqli_query($link, $sql);
				//$height = 30 * mysqli_num_rows($result);

				while( $prefList = mysqli_fetch_row($preference) ){

					$total = 0;
					for ($i = 4; $i<count($prefList); $i++){

							if($prefList[$i] == '1'){
								$total ++;
							}

						}

					$sql  = "
						SELECT `skill`.* FROM `skill`,`application`
						WHERE `application`.`InternshipID` = '$prefList[0]'
						  AND `application`.`skillID` = `skill`.`skillID`
						";
					$skill = mysqli_query($link, $sql);
					while($skillList = mysqli_fetch_row($skill) ){
						$stuScore = 0;
						for ($i = 4; $i<count($prefList); $i++){

							if($prefList[$i] == '1' && $skillList[$i-2] == '1'){
								$stuScore ++;
							}

						}
						if($total>0){
							$matchingPercentage = $stuScore/$total*100;
						}else{
							$matchingPercentage = 0 ;
						}
						//print the entry with score


						?>
						<tr>
							<td><?php echo $prefList[1]; ?></td>
							<td><?php echo $prefList[2]; ?></td>
							<td><?php echo $skillList[0]; ?></td>
							<td><?php echo $matchingPercentage;?></td>
						</tr>
						<?php


					}
				}

		 ?>

			<?php

				$i = 0;
				while($row = mysqli_fetch_row($result))
				{
					$i++;
					?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row[0]?></td>
						<td><?php echo $row[1]?></td>
						<td><?php echo $row[2]?></td>
						<td><a href="">#<?php echo $row[3]?></a></td>
					</tr>
					<?php
				}
			?>

			<!--
            <tr>
              <td>1</td>
              <td>Company Name</td>
              <td>Programmer</td>
              <td>Processing</td>
              <td><a href="">#101</a></td>
            </tr>

			-->
          </tbody>
        </table>

      </section>

	 <section id="Ads"><br>
         <hr>
         <h2>Students Advertisement</h2>

		 <?php

				$sql = "
				SELECT * FROM `StuPostAds`
				";
				$result = mysqli_query($link, $sql);
				$height = 30 * mysqli_num_rows($result);

		 ?>

        <table style="width: 1142px; height: <?php echo $height; ?>px;" border="1">
          <tbody>
            <tr>

              <td>PostID</td>
			  <td>Job Category</td>
			  <td>Job Title</td>
			  <td>Expected Salary</td>
			  <td>Language</td>
			  <td>Description</td>
			  <td>Location</td>
              <td>Posted By</td>
              <td>Expected internship Starting Date</td>
			  <td>Expected internship Ending Date</td>
			  <td>Commission</td>
              <td>Reply</td>
            </tr>

			<?php

				$i = 0;
				while($row = mysqli_fetch_row($result))
				{

					?>
					<tr>
						<?php foreach($row as $detail){
							?><td><?php echo $detail; ?></td>
							<?php
						}
						?>

						<td><form method="post" action="AmbPostForAd.php"><button formmethod="post" href="#" type = "submit" value="<?php echo $row[0]; ?>" name="PostID" class="btn btn-primary">Apply </div></form></td>
					</tr>
					<?php
				}
			?>


          </tbody>
        </table>
		 </section>


      <section id="searchintern"><br>
      <hr>

		<form method="post" action="SearchIntern.php">
		<h2>Search Internship</h2>
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
				  <select  name="Location" >
					<option value="" disabled="disabled" selected="selected">Location</option>
					<?php
						foreach($arrayLocation as $elementslocation){
							?><option><?php echo "$elementslocation";?></option><?php
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
			  <p> <span class="custom-dropdown">
				  <select name="Duration">
					<option value="" disabled="disabled" selected="selected">Duration</option>
					<option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
					<option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
					<option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
				  </select>
				</span> </p>
			  <input type="submit" name="search" value="search" href="#" class="btn btn-primary">
		</form>
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
