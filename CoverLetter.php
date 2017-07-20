<?php
session_start();

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

$sql = "SELECT * FROM language";
$result = mysqli_query($link, $sql);
$i = 0;
if($result) {
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $languages[$i] = $row;
    $i++;
  }
}

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
    <title>Cover Letter</title>
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
          <h1 class="page-header">Cover Letter <br>
            &nbsp; </h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Student / Cover Letter</li>
          </ol>
        </div>
      </div>
      <!--where you start-->
	  <form role="form" method="post" action="" autocomplete="off">
      <div class="row">
        <div class="col-lg-12">
          <div class="jumbotron">
            <h2>Cover Letter</h2>
            <p><br>
            </p>
            <p>Passion:&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              &nbsp; <input autocomplete="off" size="36" placeholder="Passion"

                name="Passion" type="text"></p>
            <p>Strength:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
              &nbsp; <input placeholder="Strength" autocomplete="off" size="81"

                name="Strength" type="text"></p>
            <p>Weakness:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input size="81"

                placeholder="Weakness" name="Weakness" type="text"></p>
            <p>Personal Interest:<input placeholder="Personal Interest" autocomplete="off"

                size="81" name="Personal Interest" type="text"></p>
            <p>Achievement:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input placeholder="Achievement"

                autocomplete="off" size="81" name="Achievement" type="text"></p>
                <h4>Language and skills :</h4>
                <div class="form-group">
                  <div class="input-group col-sm-8">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></div>
                    <select name="Language" class="form-control">
                      <option value="" disabled="disabled" selected="selected">Language</option>
                      <?php
                        foreach ($languages as $language) {
                          ?>
                      <option value="<?php echo $language["LanguageID"];?>"><?php echo $language["LanguageLabel"];?></option>
                      <?php
                        }
                        ?>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="input-group col-sm-8">
                    <h5>Practical Skills</h5>
                    <?php
                      $i = 1;
                      foreach ($skills as $skill) {
                        ?>
                    <div class="col-md-4">
                      <input type="checkbox" id="scb1" name="Skills[]" value="<?php echo $skill["SkillID"];?>"><?php echo "&nbsp".$skill["SkillLabel"];?>
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
                      <input type="checkbox" id="scb1" name="PersonalSkills[]" value="<?php echo $PersonalSkill["PersonalSkillID"];?>"><?php echo "&nbsp".$PersonalSkill["PersonalSkillLabel"];?><br>
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
            <button style="width: 100px; margin-left: 440px;" formmethod="post"

              type="submit" name="submit" value="submit" class="btn btn-primary text-center">Submit</button>
          </div>
        </div>
      </div>
      <hr>
	  <?php
			if(isset($_POST['submit']) && $_POST['submit']=="submit"){
				$id = $_SESSION['username'];
				$internID = $_SESSION['apply'];
				$passion = $_POST['Passion'];
				$strength = $_POST['Strength'];
				$weakness = $_POST['Weakness'];
				$personal_interest = $_POST['Personal_Interest'];
				$achievement = $_POST['Achievement'];
				$skill = $_POST['skill'];

			}

			//check for any errors
			if(isset($error)){
				foreach($error as $error){
					echo '<p class="bg-danger">'.$error.'</p>';
				}
			}

				// checking


			if(isset($_POST['submit'])){
				//very basic validation
				if(strlen($_POST['Passion']) == 0){
					$error[] = 'Please fill in your passion.';
				}
				if(strlen($_POST['Strength']) == 0){
					$error[] = 'Please fill in your strength.';
				}
				if(strlen($_POST['Weakness']) == 0){
					$error[] = 'Please fill in your weakness';
				}
				if(strlen($_POST['Personal_Interest']) == 0){
					$error[] = 'Please fill in your personal interest';
				}
				if(strlen($_POST['Achievement']) == 0){
					$error[] = 'Please fill in your achievement';
				}

			 }

			 if(empty($_POST['skill'])){
				$error[] = 'Please select the skill of workplace.';
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

					$sql = "INSERT INTO `skill`( `StuUsrName`,";

					foreach ($skill as $ski){
						$sql .= "`$ski`,";
					}
					$sql = substr($sql, 0, -1);
					$sql .= ") VALUES ( '$id',";

					for ($i = 0; $i < count($skill); $i++){
						$sql .= "'1',";
					}

					$sql = substr($sql, 0, -1);
					$sql .= ");";

					// echo $sql;

					mysqli_query($link, $sql);
					$SkillID = mysqli_insert_id($link);

					$sql = "INSERT INTO `application`(`StuUsrName`, `InternshipID`, `Passion`, `Strength`, `weakness`, `PersonalInterest`, `Achievement`, `status`, `SkillID`)
					VALUES ('$id', '$internID', '$passion','$strength','$weakness', '$personal_interest', '$achievement', 'processing', '$SkillID')";

					// echo $sql;
					print_r( $_SESSION);

					//$sql = "INSERT INTO `firm`(`FirmUsrName`, `FirmPassword`,  `FirmEmail`, `FirmApproved`) VALUES ('$id','$password','$email',0)";
					if(mysqli_query($link, $sql)){

						echo 'insert or update application success!';
						echo "<meta http-equiv=REFRESH CONTENT=0;url=student_home.php>";
					}
					else{

						echo 'insert or update application fail!';
						echo $sql;
					}
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
