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

  //for drop down menu in preference

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

  $sql = "SELECT * FROM country";
  $result = mysqli_query($link, $sql);
  $i = 0;
  if($result) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $countries[$i] = $row;
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
    <title>Ambassador Post Internships</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />

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
        <!-- Collect the nav links, forms, and other content for toggling -->
       		<?php
		if (isset($role) && $role == 'firm'){
		?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="SearchIntern.php">Search Applicant</a> </li>
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
            <li><a href="SearchIntern.php">Search Applicant</a> </li>
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
            <li> <a href="Login.php">Log in</a> </li>
          </ul>
        </div>

        <?php }
        ?>
        </div>
        <!-- /.navbar-collapse --> </div>
      <!-- /.container --> </nav>
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Posting Internship <br>
          &nbsp;
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li class="active">Ambassador Posting Internship</li>
        </ol>
      </div>
    </div>
    <!--where you start-->
    <div class="jumbotron">
      <div class="container text-center">
        <p class="jumbtitle"><strong>Internship details</strong></p>
      </div>
    </div>
    <div class="well col-sm-8 col-md-offset-2 wellbackground">
      <div class="col-sm-12 col-md-offset-2">
        <form class="form-horizontal" method="post" action="">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></div>
                  <input type="text" class="form-control" name="JobTitle" placeholder="Job Title" value="<?php if(isset($_POST['JobTitle'])){ echo $_POST['JobTitle']; } ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></div>
                  <input type="text" class="form-control" name="JobCategory" placeholder="Job Category" value="<?php if(isset($_POST['JobCategory'])){ echo $_POST['JobCategory']; } ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                  <textarea class="form-control" rows="3" name="Description" placeholder="Description"><?php if(isset($_POST['Description'])){ echo $_POST['Description']; } ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                  <input type="text" id="datepicker1" class="form-control" name="starting_date">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
                  <input type="text" id="datepicker2" class="form-control" name="ending_date">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></div>
                  <select name="Country" class="form-control">
                    <option value="" disabled="disabled" selected="selected">Country</option>
                    <?php
                      foreach ($countries as $country) {
                    ?>
                    <option value="<?php echo $country["CountryID"];?>"><?php echo $country["CountryName"];?></option>
                    <?php
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                  <input type="text" class="form-control" name="Quota" placeholder="Quota" value="<?php if(isset($_POST['Quota'])){ echo $_POST['Quota']; } ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group col-sm-8">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></div>
                  <input type="text" class="form-control" name="Salary" placeholder="Salary" value="<?php if(isset($_POST['Salary'])){ echo $_POST['Salary']; } ?>">
                </div>
              </div>
              <br>
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
                    <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillID"];?>"><?php echo "&nbsp".$skill["SkillLabel"];?>
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
                    <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $PersonalSkill["PersonalSkillID"];?>"><?php echo "&nbsp".$PersonalSkill["PersonalSkillLabel"];?><br>
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
              <div id="submit" class="col-md-8 col-md-offset-2">
                <button class="btn btn-default" formmethod="post" type="submit" name="submit" value="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <hr>

    <?php
      if(isset($error)){
        foreach($error as $error){
          echo '<p class="bg-danger">'.$error.'</p>';
        }
      }
      if(empty($_POST['JobTitle'])){
        $error[] = 'Please fill in the job title for the intership.';
      }
      if(empty($_POST['JobCategory'])){
        $error[] = 'Please fill in the the job category.';
      }
      if(empty($_POST['Description'])){
        $error[] = 'Please discript the mainly task for the intership.';
      }
      if(empty($_POST['starting_date'])){
        $error[] = 'Please select the starting date of the intership.';
      }
      if(empty($_POST['ending_date'])){
        $error[] = 'Please select the ending date of the intership.';
      }
      if(empty($_POST['Country'])){
        $error[] = 'Please select the location of workplace.';
      }
      if(empty($_POST['Quota'])){
        $error[] = 'Please fill in the job quota.';
      }if(empty($_POST['Salary'])){
        $error[] = 'Please fill in the salary.';
      }
      if(empty($_POST['Language'])){
        $error[] = 'Please select the language of workplace.';
      }
      if (empty($_POST['Skills'])) {
        $error[] = 'Please select at least one skill';
      }
      if (empty($_POST['PersonalSkills'])) {
        $error[] = 'Please select at least one personal skill';
      }


      //checking the gap between posting-internship and starting-date and minium duration of the internship
      //check dates
      if(isset($_POST['submit'])){
        $start = date_format(date_create($_POST['starting_date']), "Y-m-d");
        $end = date_format(date_create($_POST['ending_date']), "Y-m-d");
        $post2start =  date_diff(date_create(),date_create($start)) ;
        $start2end = date_diff(date_create($start),date_create($end));

        $limit = 14;
        if($post2start->invert == 1)
        {
          $error[] = "Please select the date later than today.";
        }
        if($start2end->invert == 1){
          $error[] = "Please select a valid starting and ending date pair.";
        }
        if($post2start->days < $limit)
        {
          $error[] = "This is too short for recruitment. We need more than $limit days";
        }
      }


      if(isset($_POST['submit']) && $_POST['submit']=="submit"){
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
      }

      if(empty($error[0])) {
          $JobTitle = $_POST['JobTitle'];
          $JobCategory = $_POST['JobCategory'];
          $Description = $_POST['Description'];
          $starting = $_POST['starting_date'];
          $ending = $_POST['ending_date'];
          $Country = $_POST['Country'];
          $Quota = $_POST['Quota'];
          $Language = $_POST['Language'];
          $Salary = $_POST['Salary'];
          $language = $_POST['language'];

          foreach ($_POST['Skills'] as $s) {
            $Skill .= $s."-";
          }
          $Skill = rtrim($Skill, "-");
          foreach ($_POST['PersonalSkills'] as $ps) {
            $persSkills .= $ps."-";
          }
          $persSkills = rtrim($persSkills, "-");

          if (isset($_POST['submit'])&& $_POST['submit']== "submit"){
            //to be update the preference
            // $prefID = mysqli_insert_id($link);

              $insert = "INSERT INTO `internship`(`FirmUsrName`, `JobCategory`, `Quota`, `JobTitle`, `Salary`, `Language`, `Description`, `Location`, `PostedBy`, `InternAgreement`, `DurationStart`, `DurationEnd`, `Skills`, `PersonalSkills`)
                      VALUES ('$id','$JobCategory','$Quota','$JobTitle','$Salary','$Language','$Description','$Country','$id','','$starting','$ending', '$Skill', '$persSkills');";

              try {
                mysqli_query($link, $insert);
                echo '<meta http-equiv=REFRESH CONTENT=0;url=ambassador_home.php>';
                echo ' success!';
              }
              catch (mysqli_sql_exception $e) {
                echo "exception <br />";
                echo $e->getMessage();
              }
          }
      }

      ?>
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
    <!-- /.container -->
    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <!-- datepicker -->
    <script>
    $(function() {
      $('#datepicker1').each(function(){
        $(this).datepicker({dateFormat: 'yy-mm-dd'});
      });
      $('#datepicker2').each(function(){
        $(this).datepicker({dateFormat: 'yy-mm-dd'});
      });
    });
    </script>
  </body>
</html>
