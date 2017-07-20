<?php session_start();

  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'student') {
    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
  }
  else {
    header('Location: InternDetails.php');
    exit();
  }

  require_once("mysql_connect.inc.php");

  if(isset($_POST['internship'])) {
    $internshipID = $_POST['internship'];
  }
  else {
    echo '<meta http-equiv=REFRESH CONTENT=0;url=SearchIntern.php>';
  }

  $sql = "SELECT * FROM `InternshipSkills` WHERE `InternshipID` = '$internshipID'";
  $res = mysqli_query($link, $sql);
  $internshipSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

  $sql = "SELECT * FROM `InternshipPersonalSkills` WHERE `InternshipID` = '$internshipID'";
  $res = mysqli_query($link, $sql);
  $internshipPersSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

  $sql = "SELECT * FROM `StudentSkills` WHERE `StudentID` = '$id'";
  $res = mysqli_query($link, $sql);
  $studentSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

  $sql = "SELECT * FROM `StudentPersonalSkills` WHERE `StudentID` = '$id'";
  $res = mysqli_query($link, $sql);
  $studentPersSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

  foreach ($internshipSkills as $intSkill) {
    foreach ($studentSkills as $studSkill) {
      if ($intSkill['SkillID'] == $studSkill['SkillID']) {
        $count += 1;
      }
    }
  }

  foreach ($internshipPersSkills as $intpSkill) {
    foreach ($studentPersSkills as $studpSkill) {
      if ($intpSkill['PersonalSkillID'] == $studpSkill['PersonalSkillID']) {
        $count += 1;
      }
    }
  }

  $skillCount = count($internshipSkills) + count($internshipPersSkills);
  $match = intval(($count*100)/$skillCount);

  try {
    $sql = "INSERT INTO `application` (`StuUsrName`, `InternshipID`, `match`, `status`) VALUES ('$id', '$internshipID', '$match', 'Processing')";
    mysqli_query($link, $sql);
  } catch (Exception $e) {
    exit('<p>Erreur lors de l\'insertion des données<br/>'.$e->getMessage().'</p>');
  }

  //echo '<meta http-equiv=REFRESH CONTENT=0;url=student_home.php>';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Apply</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h2> Processing data...</h2>
      <div class="progress progress-striped active">
        <div class="progress-bar"></div>
      </div>
      <div id="pourcentage" class="pull-right"></div>
    </div>
      <!-- <script src="js/jquery.js"></script> -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
      <script>
      $(document).ready(function(){
        function timer(n) {
          $(".progress-bar").css("width", n + "%");
          $("#pourcentage").text(n + "%");
          if(n < 100) {
            setTimeout(function() {
              timer(n + 10);
            }, 200);
          }
          else {
            window.location.replace("http://boardingates.jbrunet.com/student_home.php");
          }
        }
        $(function (){
            timer(0);
        });
      });
      </script>
    </body>
</html>
