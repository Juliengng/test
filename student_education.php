<?php session_start();

if (isset($_SESSION['username']))
{
				$id = $_SESSION['username'];
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
    <title>Student Education Profile</title>
	  <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
<link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
  </head>
   <style type="text/css">
    body {
        background: url(assets/img/image3395-2.png) no-repeat center center fixed;
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
  <div class="row">
    <!-- Navigation -->
   <div class="header-nightsky" style="background: no-repeat" >
    <?php   require ('components/navbar.php');?>

	 
    <!-- Page Content -->
    <div class="container">
      
          <div class="col-md-6 col-md-offset-3">

            <form class="form-signin mg-btm" method="post" action="" autocomplete="off" enctype="multipart/form-data">
               <h1 class="heading-desc" style="background-color: #337ab7;">Education profile</h1>
              		<div class="main">
                		<p>Field of Study : <span class="dot"> </span></p>
		<input type="text" name="studyfield"  class="form-control" id="studyfield" placeholder="" value="<?php if(isset($_POST['studyfield'])){ echo $_POST['studyfield']; } ?>" required="">
		<p>Major (speciality): <span class="dot"> </span></p>
	 	<input type="text" name="major" class="form-control" id="major" placeholder="" required="">
	 	<p>University Name : <span class="dot"> </span></p>
	 	<input type="text" name="universityname" class="form-control" id="universityname"  placeholder="" required="">
		<p>Level of Academic Degree : <span class="dot"> </span></p>
			<select name="academiclevel" title="Academic Level" style="color:black"><br>
                        <option value="highdegree">High degree School</option>
						<option value="professionaldegree">Professional degree</option>
                        <option value="highnationaldiploma">High National Diploma/ HND</option>
						<option value="bachelordegree">Bachelor's degree</option>
						<option value="mastersdegree">Master's degree</option>
						<option value="engineersdegree">Engineer's degree</option>
						<option value="doctoratesdegree">Doctorate's degree</option>
                        </select>
						<br><br>
		<p>GPA (Grade Point Average): <span class="dot"> </span></p>
	 	<input type="text" name="gpa"  class="form-control" id="gpa" value="<?php if(isset($_POST['gpa'])){ echo $_POST['gpa']; } ?>" placeholder="" required="">
</div>
		<div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                            	<button  formnovalidate="formnovalidate" formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"
                                      name="next" class="btn btn-large btn-primary pull-right">Submit and next</button>
                            </div>
                        </div>
                  </div>
		 


     


		  <?php


		  // checking
		  // send sql to the DB

		
			if (isset($_POST['next'])&& $_POST['next']== "submit"){

			$studyfield = $_POST['studyfield'];
			$major=  $_POST['major'];
			$universityname =  $_POST['universityname'];
			$gpa =  $_POST['gpa'];
			$workexperience = $_POST['workexperience'];
			
				//$sql = "INSERT INTO `student`(`StuUsrName`, `StuPassword`, `StuEmail`,  `StuApproved`) VALUES ('username','$password','$email',0);";
				$sql = "UPDATE `stu_personal_info` SET `StudyField`='$studyfield', `Major`='$major', `UniversityName`='$universityname',  `GPA`='$gpa',  `WorkExperience`='$workexperience' WHERE `StuUsrName`='$id' ;";
			
				if(mysqli_query($link, $sql)){
					$_SESSION['username'] = $id;
					$_SESSION['role'] = 'student';
				
					echo '<meta http-equiv=REFRESH CONTENT=0;url=student_workexperience.php>';
					echo 'registration success!';
				}
				else{
					echo $sql;
					exit();
					echo 'registration fail!';

				}
			}
		  
		  ?>            
                </form>
            </div>
        </div>
    </div>
</div>
       	  
        	 
            
              <!--where you end-->







<div class="row">
<?php require("components/contact.php");?>
<?php require("components/footer.php");?>
</div>
<script src="assets/libs/jquery/jquery.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
</body>
</html>
