<?php session_start();

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
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Information</title>
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
    <?php
    require ('components/navbar.php');?>

	 
    <!-- Page Content -->
    <div class="container">
      
          <div class="col-md-6 col-md-offset-3">

            <form class="form-signin mg-btm" method="post" action="" autocomplete="off" enctype="multipart/form-data">
               <h1 class="heading-desc" style="background-color: #337ab7;">Student Information</h1>
              		<div class="main">
                		  <p>First Name : <span class="dot"> </span></p>
		<input type="text" name="givenname" class="form-control" placeholder="" value="<?php if(isset($_POST['givenname'])){ echo $_POST['givenname']; } ?>" >
		<p>Last name : <span class="dot"> </span></p>
	 	<input type="text" name="surname" class="form-control" placeholder="" value="<?php if(isset($_POST['surname'])){ echo $_POST['surname']; } ?>" >
		   <br><br><p> Please upload your profile picture:</p>
    <input type="file" name="fileToUpload1"   id="fileToUpload1" style="color:black;"><br>
    <input type="submit" value="Upload Image" name="submitprofilepic" style="color:black;">
	           		<?php
						if(isset($_POST["submitprofilepic"])&&(!empty($_POST['fileToUpload1']))){
						
	$target_dir = "../View/assets/profilepics/";
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		 echo '<p style="color: red">';
        echo "File is not an image.";
		echo '</p>';
        $uploadOk = 0;
    }

// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000) {
	 echo '<p style="color: red">';
    echo "Sorry, your file is too large.";
	echo '</p>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	 echo '<p style="color: red">';
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo '</p>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	 echo '<p style="color: red">';
    echo "Sorry, your file was not uploaded.";
	echo '</p>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
	$profilepic=$_FILES["fileToUpload1"]["name"];
	$_SESSION['profilepic']=$_FILES["fileToUpload1"]["name"];
        echo '<p style="color: green">';
			echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
			echo '</p>';
    } else {
		 echo '<p style="color: red">';
        echo "Sorry, there was an error uploading your file.";
		echo '</p>';
    }
}
}

?>

	 	<p>Gender : <span class="dot"> </span></p>
	 	<input type="radio" name="gender" value="male" checked="checked" required="required"><span  style="color:black;">Male</span>
		<input required="required" name="gender" value = "female" type="radio"><span  style="color:black;">Female</span>
		<p>Date of Birth : <span class="dot"> </span></p>
	 	<input type="date" name="dob" class="form-control" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; } ?>" placeholder="" style="color:black;">
		<p>Nationality: <span class="dot"> </span></p>
	 	<input type="text" name="nationality" class="form-control" value="<?php if(isset($_POST['nationality'])){ echo $_POST['nationality']; } ?>" placeholder="" >
		<p>Passport or ID Number: <span class="dot"> </span></p>
	 	<input type="text" name="passportnumber" class="form-control" value="<?php if(isset($_POST['passportnumber'])){ echo $_POST['passportnumber']; } ?>" placeholder="" >
   <br><br><p> Please upload your passport image:</p>
    <input type="file" name="fileToUpload"  id="fileToUpload" style="color:black;"><br>
    <input type="submit" value="Upload Image"  name="submitphoto" style="color:black;">
	           		<?php
						if(isset($_POST["submitphoto"])&&(!empty($_POST['fileToUpload']))){
	$target_dir = "../View/assets/idpassportimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		echo '<p style="color: red">';
        echo "File is not an image.";
		echo '</p>';
        $uploadOk = 0;
    }


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo '<p style="color: red">';
    echo "Sorry, your file is too large.";
	echo '</p>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo '<p style="color: red">';
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo '</p>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo '<p style="color: red">';
    echo "Sorry, your file was not uploaded.";
	echo '</p>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$_SESSION['passport']=$_FILES["fileToUpload"]["name"];
		$passport=$_FILES["fileToUpload"]["name"];
        echo '<p style="color: green">';
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			echo '</p>';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>

		<p>Passport Valid Date: <span class="dot"> </span></p>
	 	<input type="date" name="passportvaliddate" class="form-control" value="<?php if(isset($_POST['passportvaliddate'])){ echo $_POST['passportvaliddate']; } ?>" placeholder="" style="color:black;">
		<p>Mailing Address: <span class="dot"> </span></p>
	 	<input type="text" name="mailingaddress"  class="form-control" value="<?php if(isset($_POST['mailingaddress'])){ echo $_POST['mailingaddress']; } ?>" placeholder="" >
		<p>Contact Number: <span class="dot"> </span></p>
	 	<input type="text" name="contactnumber" class="form-control" value="<?php if(isset($_POST['contactnumber'])){ echo $_POST['contactnumber']; } ?>" placeholder="" >
		<p>Skype Account/Whatsapp Number: <span class="dot"> </span></p>
	 	<input type="text" name="skypeaccount" class="form-control" value="<?php if(isset($_POST['skypeaccount'])){ echo $_POST['skypeaccount']; } ?>" placeholder="" >
		</div>
		                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-primary pull-right" value="submit" name="next">Submit and next</button>
                            </div>
                        </div>
                    </div>
		<?php
		
	

			//check for any errors
			if(isset($error)){
				foreach($error as $error){
					echo '<p class="bg-danger">'.$error.'</p>';
				}
			}

		?>


		  <?php

			if(isset($_POST['next']) && $_POST['next']=="submit"){
				$id = $_SESSION['username'];

				// info gathering
				$givenname = $_POST['givenname'];
				$surname = $_POST['surname'];
				$gender = $_POST['gender'];
				$dob = $_POST['dob'];
				$nationality = $_POST['nationality'];
				$passportnumber = $_POST['passportnumber'];
				$passportvaliddate = $_POST['passportvaliddate'];
				$mailingaddress = $_POST['mailingaddress'];
				$contactnumber = $_POST['contactnumber'];
				$skypeaccount = $_POST['skypeaccount'];



			  // basic checking

				if(!isset($_POST['givenname']) || strlen($_POST['givenname']) == 0){
					$error[] = 'Please fill in your given name.';
				}
				if(!isset($_POST['surname']) || strlen($_POST['surname']) == 0){
					$error[] = 'Please fill in your surname.';
				}
				if(!isset($_POST['gender']) ){
					$error[] = 'Please select your gender.';
				}
				if(!isset($_POST['dob']) || strlen($_POST['dob']) == 0){
					$error[] = 'Please fill in your date of birth.';
				}
				if(!isset($_POST['nationality']) || strlen($_POST['nationality']) == 0){
					$error[] = 'Please fill in your nationality.';
				}
				if(!isset($_POST['passportnumber']) || strlen($_POST['passportnumber']) == 0){
					$error[] = 'Please fill in your passport number.';
				}
				if(!isset($_POST['passportvaliddate']) || strlen($_POST['passportvaliddate']) == 0){
					$error[] = 'Please fill in your passport\'s valid date.';
				}
				if(!isset($_POST['mailingaddress']) || strlen($_POST['mailingaddress']) == 0){
					$error[] = 'Please fill in your mailing address.';
				}
				if(!isset($_POST['contactnumber']) || strlen($_POST['contactnumber']) == 0){
					$error[] = 'Please fill in your contact number.';
				}
				if(!isset($_POST['skypeaccount']) || strlen($_POST['skypeaccount']) == 0){
					$error[] = 'Please fill in your skype account.';
				}

				//check dates
				$dobYear =  date_diff(date_create(),date_create($dob)) ;
				$limit = 18;
				if($dobYear->format('%y') < $limit)
				{
					$error[] = "You are below $limit years old. You cannot apply any internship.";
				}
				if(date_diff(date_create(),date_create($passportvaliddate))->format('%m') < 3)
				{
					$error[] = "your passport be valid at least three months beyond the dates of your trip. You need to renew your passport.";
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
		 

// Check if image file is a actual image or fake image

		  // send sql to the DB

		  if(empty($error[0])){
			if (isset($_POST['next'])&& $_POST['next']== "submit"){
				$profilepic=$_SESSION['profilepic'];
				$passport=$_SESSION['passport'];
				//$sql = "INSERT INTO `stu_personal_info`(`usrName`, `usrType`) VALUES ('$id', 'student');";
				//to be update the pic part
				$sql =  "INSERT INTO `stu_personal_info`
				(`StuUsrName`, `Given Name`, `Surname`, `Gender`, `DateOfBirth`, `Nationality`, `PassportNumber`, `PassportValidDate`, `MailingAddress`, `ContactNumber`, `SkypeAccount`, `stu_profile_pic`,`IdPassportPic`)
				VALUES ('$id','$givenname','$surname','$gender','$dob','$nationality','$passportnumber','$passportvaliddate','$mailingaddress','$contactnumber','$skypeaccount','$profilepic','$passport')";



				if(mysqli_query($link, $sql)){
					?>
					<br>
					<?php
					echo '<meta http-equiv=REFRESH CONTENT=0;url=student_education.php>';
					//echo 'registration success!';
				}
				else{
					?>
					<br>
					<?php
					echo 'registration fail!';
				}
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