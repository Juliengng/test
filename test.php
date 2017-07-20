<?php
session_start();
include("mysql_connect.inc.php");

if (isset($_SESSION['username']))
{
				$id = $_SESSION['username'] ;
								$role = $_SESSION['role'];
}

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
    <title>Welcome to ViceVersa</title>
	<link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Material Design Bootstrap -->
    <link href="assets/libs/bootstrap-material-design/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
      <div class="header-nightsky">
          <nav class="navbar navbar-default">
              <div class="container">
                  <a class="navbar-brand" href="index.php">ViceVersa</a>
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="fa fa-bars"></span>
                      </button>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                          
                          <li><a href="SearchIntern.php">Search Internship</a></li>
						  <li><a href="index.php">Student Signup</a></li>
                          <li><a href="AmbSignup.php">Intern Advisor Signup</a></li>
                          <li><a href="FirmSignup.php">Company Signup</a></li>
                          <li><a href="login.php">LOGIN</a></li>
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="hero">
              <h1>Welcome to ViceVersa</h1>
              <img src="assets/img/cc.png" class="logoRotate">
              <p>We offer to student the possibility to find out his appropriate internship !</p>
			              <form method="post" action="SearchIntern.php">
                <div>
                    <select name="JobCategory" title="Internship" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <?php
                        foreach($arrayJobCategory as $category){
                            ?><option><?php echo "$category";?></option><?php
                        }
                        ?>
                    </select>
                    <select  name="Location" title="Location" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">

                        <?php
                        foreach($arrayLocation as $elementslocation){
                            ?><option><?php echo "$elementslocation";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Language" title="Language" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <?php
                        foreach($arrayLanguage as $elementslanguage){
                            ?><option><?php echo "$elementslanguage";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Duration" title="Duration" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
                    </select>
                </div>

                &nbsp<p align="center"><input type="submit" name="search" value="Search " href="#" class="btn btn-success" >

                <?php
                if(isset($_POST['JobCategory'])||isset($_POST['Location'])||isset($_POST['Language'])||isset($_POST['Duration']))
                {
                    $sql = "SELECT `InternshipID`,`jobTitle`, `Description` FROM internship WHERE 1";
                    if(isset($_POST['JobCategory']))
                    {
                        $JobCategory = $_POST['JobCategory'];
                        $sql .= " AND `JobCategory` = '$JobCategory'";
                    }
                    if(isset($_POST['Location']))
                    {
                        $Location = $_POST['Location'];
                        $sql .= " AND  `Location` = '$Location'";
                    }
                    if(isset($_POST['Language']))
                    {
                        $Language = $_POST['Language'];
                        $sql .= " AND `Language` = '$Language'";
                    }
                    if(isset($_POST['Duration']))
                    {
                        $Duration = $_POST['Duration'];
                        $sql .= " AND $Duration";
                    }
                    $result = mysqli_query($link, $sql);
                }
                ?>
            </form>
          </div>
      </div>
      <div class="container-fluid" id="loginHeader">
          <div class="row">
              <div class="col-md-4">
                  <span class="fa fa-graduation-cap fa-5x" aria-hidden="true"></span>
                  <a class="btn btn-mdb waves-effect " href="student_login.php"><h5>Login as Student</h5></a>
              </div>
              <div class="col-md-4">
                  <span class="fa fa-exchange fa-5x" aria-hidden="true"></span>
                  <a class="btn btn-mdb waves-effect" href="AmbLogin.php"><h5>Login as Ambassador</h5></a>
              </div>
              <div class="col-md-4">
                  <span class="fa fa-building-o fa-5x" aria-hidden="true"></span>
                  <a class="btn btn-mdb waves-effect" href="FirmLogin.php"><h5>Login as Firm</h5></a>
              </div>
          </div>
      </div>
        <div class="col-lg-12">
            <img id="logoAccueil" src="assets/img/CutViceVersaLogoOnlyTransparent.png">
            <div class="col-lg-12">
              <h1>Welcome to ViceVersa</h1>
              <h2 class="subtitle page-header" >Search Internship</h2>
            </div>
        <div>
        <div class="col-lg-12 center">
            <form method="post" action="SearchIntern.php">
                <div>
                    <select name="JobCategory" title="Internship" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <?php
                        foreach($arrayJobCategory as $category){
                            ?><option><?php echo "$category";?></option><?php
                        }
                        ?>
                    </select>
                    <select  name="Location" title="Location" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">

                        <?php
                        foreach($arrayLocation as $elementslocation){
                            ?><option><?php echo "$elementslocation";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Language" title="Language" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <?php
                        foreach($arrayLanguage as $elementslanguage){
                            ?><option><?php echo "$elementslanguage";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Duration" title="Duration" class="selectpicker" data-style="btn-amber" data-width="fit" data-size="auto">
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
                    </select>
                </div>

                &nbsp<p align="center"><input type="submit" name="search" value="search" href="#" class="btn btn-success" >
                </br>

                <?php
                if(isset($_POST['JobCategory'])||isset($_POST['Location'])||isset($_POST['Language'])||isset($_POST['Duration']))
                {
                    $sql = "SELECT `InternshipID`,`jobTitle`, `Description` FROM internship WHERE 1";
                    if(isset($_POST['JobCategory']))
                    {
                        $JobCategory = $_POST['JobCategory'];
                        $sql .= " AND `JobCategory` = '$JobCategory'";
                    }
                    if(isset($_POST['Location']))
                    {
                        $Location = $_POST['Location'];
                        $sql .= " AND  `Location` = '$Location'";
                    }
                    if(isset($_POST['Language']))
                    {
                        $Language = $_POST['Language'];
                        $sql .= " AND `Language` = '$Language'";
                    }
                    if(isset($_POST['Duration']))
                    {
                        $Duration = $_POST['Duration'];
                        $sql .= " AND $Duration";
                    }
                    $result = mysqli_query($link, $sql);
                }
                ?>
            </form>
			
        </div>
        </div>
        </div>
      </div>
      <section id="contact">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2 class="section-heading">Contact Us</h2>
                      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <form name="sentMessage" id="contactForm" novalidate="">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                      <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="form-group">
                                      <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number." pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <textarea class="form-control" placeholder=" Your Message *" id="message" required="" data-validation-required-message="Please enter a message." rows="8"></textarea>
                                      <p class="help-block text-danger"></p>
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="col-lg-12 text-center">
                                  <div id="success"></div>
                                  <button href="mailto:contact@boardingates.com" type="button" class="btn btn-success">Contact us</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!-- Footer -->
      <footer id="myFooter">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <span class="copyright">Copyright © ViceVersa 2016</span>
                  </div>
                  <div class="col-md-4">
                      <div class="social-networks">
                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <ul class="list-inline quicklinks">
                          <li><a href="#">Privacy Policy</a>
                          </li>
                          <li><a href="#">Terms of Use</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>

    <!-- /.container -->
    <!-- jQuery -->
    <script src="assets/libs/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
  </body>
</html>
