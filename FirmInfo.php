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
    <title>Company Information Form</title>
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
        background: url(assets/img/image3395-2_1366x666.png) no-repeat center center fixed;
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
               <h1 class="heading-desc" style="background-color: #504e63;">Company's informations</h1>
              		<div class="main">
                		<p>Company Name : <span class="dot"> </span></p>
                		<input type="text" name="firmname" placeholder="" value="<?php if(isset($_POST['firmname'])){ echo $_POST['firmname']; } ?>" required="" class="form-control">
                    
                		<p>Company Registration Number : <span class="dot"> </span></p>
                	 	<input type="text" name="Firm_Reg__No_" placeholder="" value="<?php if(isset($_POST['Firm_Reg__No_'])){ echo $_POST['Firm_Reg__No_']; } ?>" required="" class="form-control">
                	 	<p>Company Insurance Number : <span class="dot"> </span></p>
                	 	<input type="text" name="Insuranceno" value="<?php if(isset($_POST['Insuranceno'])){ echo $_POST['Insuranceno']; } ?>" required="" class="form-control">
                		<p>Supervisor Name : <span class="dot"> </span></p>
                	 	<input type="text" name="Supervisor" value="<?php if(isset($_POST['Supervisor'])){ echo $_POST['Supervisor']; } ?>" placeholder="" required="" class="form-control">
                		<p>Company domain: <span class="dot"> </span></p>
                	 	<input type="text" name="BusinessActivity"  value="<?php if(isset($_POST['BusinessActivity'])){ echo $_POST['BusinessActivity']; } ?>" placeholder="" required="" class="form-control">
                		<p>Skype Account: <span class="dot"> </span></p>
                	 	<input type="text" name="skype" value="<?php if(isset($_POST['skype'])){ echo $_POST['skype']; } ?>" placeholder="" required="" class="form-control">
						        
                    <p> Please upload your company logo:</p>
                    <input type="file" name="fileToUpload2" id="fileToUpload2" style="color:black;" required><br>
                    <input type="submit" value="Upload Image" name="submitprofilepic" style="color:black;">
                                <?php
                            if(isset($_POST["submitprofilepic"])){
                            
                $target_dir = "../View/assets/profilepics/";
                $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                // Check if image file is a actual image or fake image
                    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
                    if($check !== false) {
                      //  echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                     echo '<p style="color: red">';
                        echo "File is not an image.";
                    echo '</p>';
                        $uploadOk = 0;
                    }

                // Check if file already exists
                if (file_exists($target_file)) {
                   echo '<p style="color: red">';
                    $error[] ="Sorry, file already exists.";
                    echo '</p>';
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload2"]["size"] > 500000) {
                   echo '<p style="color: red">';
                    echo "Sorry, your file is too large.";
                  echo '</p>';
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                   echo '<p style="color: red">';
                    $error[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  echo '</p>';
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                   echo '<p style="color: red">';
                   $error[] = "Sorry, your file was not uploaded.";
                    echo '</p>';
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
                  $profilepic=$_FILES["fileToUpload2"]["name"];
                  $_SESSION['firmprofilepic']=$_FILES["fileToUpload2"]["name"];
                        echo '<p style="color: green">';
                      echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
                      echo '</p>';
                    } else {
                     echo '<p style="color: red">';
                    $error[] = "Sorry, there was an error uploading your file.";
                    echo '</p>';
                    }
                }
                }

                ?>
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
              					if(isset($error)){
              						foreach($error as $error){
              							echo '<p class="bg-danger">'.$error.'</p>';
              						}
              					}
              					
              					?>
              					
              					<?php 
              					
              						if(isset($_POST['next']) && $_POST['next']=="submit"){
              							$id = $_SESSION['username'];
              						$firmname=$_POST['firmname'];
              						$Firm_Reg__No_=$_POST['Firm_Reg__No_'] ;
              						$Insuranceno=$_POST['Insuranceno'] ;
              						$Supervisor=$_POST['Supervisor'] ;
              						$BusinessActivity=$_POST['BusinessActivity'];
              				
              						$skype=$_POST['skype'];
              						
              							
              					if(empty($_POST['firmname'])){
              						$error[] = 'Please fill in the firm name.';
              					}
              					if(empty($_POST['Firm_Reg__No_'])){
              						$error[] = 'Please fill in the the registration number of your firm.';
              					}
              					if(empty($_POST['Insuranceno'])){
              						$error[] = 'Please fill in the insurance number of your firm.';
              					}
              					if(empty($_POST['Supervisor'])){
              						$error[] = 'Please fill in the supervisor who will interview the candidates.';
              					}
              				
              				if(empty($_POST['BusinessActivity'])){
              						$error[] = 'Please describe the main business activity of your firm.';
              					}
              					if(empty($_POST['skype'])){
              						$error[] = 'Please fill your firm\'s skype account.';
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
              					

              		if(empty($error[0]))
                  {

              			if (isset($_POST['next'])&& $_POST['next']== "submit")
                    {
                          $profilepic=$_SESSION['firmprofilepic'];
                          if(empty($profilepic))
                          {
                            header('Location: FirmInfo.php.php');
                          }
              						//to be update the pic part

              						$sql = "INSERT INTO `firm_info`(`FirmUsrName`, `FirmRegNum`, `FirmInsuranceNum`,`ProfilePic`, `Supervisor`, `FirmName`, `activity`, `FirmSkypeAccount`)
              							VALUES ('$id','$Firm_Reg__No_','$Insuranceno','$profilepic','$Supervisor','$firmname','$BusinessActivity','$skype');";
              						if(mysqli_query($link, $sql)){
              									
                                
              									echo 'success!';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
              								}
              								else{
              									echo ' fail!';
              									echo $sql;
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