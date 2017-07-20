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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
      <div class="header-nightsky">
        <?php if(!isset($_COOKIE["vu"]))
      {?>
          <div class="alert alert-success alert-dismissable" style="text-align:center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>ViceVersa</strong> sites use cookies and similar technologies. By using <strong>ViceVersa</strong> sites, you are agreeing to our revised <a>Privacy Policy</a> and <a>Terms of Service</a>, including our Cookie Policy..
          </div>
          <?php setcookie("vu",1,time() + (3600*24*3),'/');// expire dans 3 jours
      }?>
          <?php require("components/navbar.php");?>
          <div class="hero">
              <h1>Welcome to ViceVersa</h1>
<!--              <img src="assets/img/cc.png" class="logoRotate">-->
              <h3>The first collaborative platform of internship offers via interns already in companies all over the world</h3>
              <form method="post" action="SearchIntern.php" id="searchInternshipForm">
                <div>
                    <span class="sr-only">Job Category</span>
                    <select name="JobCategory" title="Internship" class="selectpicker">

                        <?php
                        foreach($arrayJobCategory as $category){
                            ?><option><?php echo "$category";?></option><?php
                        }
                        ?>
                    </select>
                    <select  name="Location" title="Location" class="selectpicker">

                        <?php
                        foreach($arrayLocation as $elementslocation){
                            ?><option><?php echo "$elementslocation";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Language" title="Language" class="selectpicker">
                        <?php
                        foreach($arrayLanguage as $elementslanguage){
                            ?><option><?php echo "$elementslanguage";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Duration" title="Duration" class="selectpicker">
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
                    </select>
                </div>

                &nbsp 
				<input type="submit" name="search" value="Search " href="#" class="button-mdn">

        </form>
                <?php
                if(isset($_POST['JobCategory'])||isset($_POST['Location'])||isset($_POST['Language'])||isset($_POST['Duration']))
                {
                    $sql = "SELECT * FROM internship WHERE 1";
                    if(isset($_POST['JobCategory']))
                    {
                        $JobCategory = $_POST['JobCategory'];
                        $sql .= " AND `JobCategory` = '$JobCategory'";
                    }
                    /*if(isset($_POST['Location']))
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
                    }*/
                    $result = mysqli_query($link, $sql);
                }
                ?>
            
          </div>
      </div>
      <div id="loginHeader">
          <iframe src="https://www.youtube.com/embed/C-TYhmEkBH0?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <?php
        require("components/contact.php");
        require("components/footer.php");
      ?>
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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
  </body>
</html>
