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
    <title>Student Work Experience</title>
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
	
	.container1{
	width:100%;	
	
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
               <h1 class="heading-desc" style="background-color: #337ab7;">Work Experience</h1>
              		<div class="main">
					<p>Please select the number of work experiences you had :</p>
					  <select id="number" name="number" title="Work Experience" style="color:black"><br>
                            <option >1</option>
							 <option >2</option>
							  <option >3</option>
                        </select>
                		 <div class="form-group">
               
                   

<div class="container1">
    <div class="1">
	<p><b>Work Experience 1</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted"  class="form-control" id="datestarted" placeholder="" value="<?php if(isset($_POST['datestarted'])){ echo $_POST['datestarted']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration" class="form-control" id="duration"  placeholder="" value="<?php if(isset($_POST['duration'])){ echo $_POST['duration']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname" class="form-control" id="companyname"  placeholder=""  value="<?php if(isset($_POST['companyname'])){ echo $_POST['companyname']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position" class="form-control" id="position" placeholder="" value="<?php if(isset($_POST['position'])){ echo $_POST['position']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location" class="form-control" id="location"  value="<?php if(isset($_POST['location'])){ echo $_POST['location']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>		
<div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                            	<button  formnovalidate="formnovalidate" formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"
                                      name="next1" class="btn btn-large btn-primary pull-right">Submit and next</button>
                            </div>
                        </div>
                  </div>
    </div>
    <div class="2">
      <p><b>Work Experience 1</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted1"  class="form-control" id="datestarted1" placeholder="" value="<?php if(isset($_POST['datestarted1'])){ echo $_POST['datestarted1']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration1" class="form-control" id="duration1"  placeholder="" value="<?php if(isset($_POST['duration1'])){ echo $_POST['duration1']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname1" class="form-control" id="companyname1"  placeholder=""  value="<?php if(isset($_POST['companyname1'])){ echo $_POST['companyname1']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position1" class="form-control" id="position1" placeholder="" value="<?php if(isset($_POST['position1'])){ echo $_POST['position1']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location1" class="form-control" id="location1"  value="<?php if(isset($_POST['location1'])){ echo $_POST['location1']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>		
<p><b>Work Experience 2</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted12"  class="form-control" id="datestarted12" placeholder="" value="<?php if(isset($_POST['datestarted12'])){ echo $_POST['datestarted12']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration12" class="form-control" id="duration12"  placeholder="" value="<?php if(isset($_POST['duration12'])){ echo $_POST['duration12']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname12" class="form-control" id="companyname12"  placeholder=""  value="<?php if(isset($_POST['companyname12'])){ echo $_POST['companyname12']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position12" class="form-control" id="position12" placeholder="" value="<?php if(isset($_POST['position12'])){ echo $_POST['position12']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location12" class="form-control" id="location12"  value="<?php if(isset($_POST['location12'])){ echo $_POST['location12']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>	
<div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                            	<button  formnovalidate="formnovalidate" formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"
                                      name="next2" class="btn btn-large btn-primary pull-right">Submit and next</button>
                            </div>
                        </div>
                  </div>	
</div>
	    <div class="3">
                          <p><b>Work Experience 1</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted2"  class="form-control" id="datestarted2" placeholder="" value="<?php if(isset($_POST['datestarted2'])){ echo $_POST['datestarted2']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration2" class="form-control" id="duration2"  placeholder="" value="<?php if(isset($_POST['duration2'])){ echo $_POST['duration2']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname2" class="form-control" id="companyname2"  placeholder=""  value="<?php if(isset($_POST['companyname2'])){ echo $_POST['companyname2']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position2" class="form-control" id="position2" placeholder="" value="<?php if(isset($_POST['position2'])){ echo $_POST['position2']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location2" class="form-control" id="location2"  value="<?php if(isset($_POST['location2'])){ echo $_POST['location2']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>		<p><b>Work Experience 2</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted22"  class="form-control" id="datestarted22" placeholder="" value="<?php if(isset($_POST['datestarted22'])){ echo $_POST['datestarted22']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration22" class="form-control" id="duration22"  placeholder="" value="<?php if(isset($_POST['duration22'])){ echo $_POST['duration22']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname22" class="form-control" id="companyname22"  placeholder=""  value="<?php if(isset($_POST['companyname22'])){ echo $_POST['companyname22']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position22" class="form-control" id="position22" placeholder="" value="<?php if(isset($_POST['position22'])){ echo $_POST['position22']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location22" class="form-control" id="location22"  value="<?php if(isset($_POST['location22'])){ echo $_POST['location22']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>		
<p><b>Work Experience 3</b></p>
	<div class="row">
	 <div class="col-md-6">
                      <p>Date Started : <span class="dot"> </span></p>
		<input type="date" name="datestarted23"  class="form-control" id="datestarted23" placeholder="" value="<?php if(isset($_POST['datestarted23'])){ echo $_POST['datestarted23']; } ?>" required="">
		<p>Duration : <span class="dot"> </span></p>
	 	<input type="text" name="duration23" class="form-control" id="duration23"  placeholder="" value="<?php if(isset($_POST['duration23'])){ echo $_POST['duration23']; } ?>" required=""> 
			<p>Company Name : <span class="dot"> </span></p>
	 	<input type="text" name="companyname23" class="form-control" id="companyname23"  placeholder=""  value="<?php if(isset($_POST['companyname23'])){ echo $_POST['companyname23']; } ?>" required=""> 	
		</div>	
		 <div class="col-md-6">
		<p>Position : <span class="dot"> </span></p>	
	 	<input type="text" name="position23" class="form-control" id="position23" placeholder="" value="<?php if(isset($_POST['position23'])){ echo $_POST['position23']; } ?>" required="">
			<p>Location : <span class="dot"> </span></p>
	 	<input type="text" name="location23" class="form-control" id="location23"  value="<?php if(isset($_POST['location23'])){ echo $_POST['location23']; } ?>" placeholder="" required=""> 

		</div>	
	 	  

	
</div>		
		<div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                            	<button  formnovalidate="formnovalidate" formenctype="multipart/form-data" formmethod="post" type="submit" autofocus="autofocus" value = "submit"
                                      name="next3" class="btn btn-large btn-primary pull-right">Submit and next</button>
                            </div>
                        </div>
                  </div>
    </div>
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
              					
              						if(isset($_POST['next1']) && $_POST['next1']=="submit"){
              							$id = $_SESSION['username'];
              						$datestarted=$_POST['datestarted'];
              						$duration=$_POST['duration'] ;
              						$companyname=$_POST['companyname'] ;
              						$position=$_POST['position'] ;
              						$location=$_POST['location'];
              				
              				
              						
              							
              					if(empty($_POST['datestarted'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location'])){
              						$error[] = 'Please fill in the location.';
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

              			if (isset($_POST['next1'])&& $_POST['next1']== "submit")
                    {
                        
                       
              						//to be update the pic part

              						$sql = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted','$position','$duration','$location','$companyname');";
              						if(mysqli_query($link, $sql)){
              									
                                
              									echo 'success!';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=student_dashboard.php>';
              								}
              								else{
              									echo ' fail!';
              									echo $sql;
              								}
              				}
              		}

              				  ?>
							  			<?php 
              					
              						if(isset($_POST['next2']) && $_POST['next2']=="submit"){
              							$id = $_SESSION['username'];
              						$datestarted1=$_POST['datestarted1'];
              						$duration1=$_POST['duration1'] ;
              						$companyname1=$_POST['companyname1'] ;
              						$position1=$_POST['position1'] ;
              						$location1=$_POST['location1'];
									$datestarted12=$_POST['datestarted12'];
              						$duration12=$_POST['duration12'] ;
              						$companyname12=$_POST['companyname12'] ;
              						$position12=$_POST['position12'] ;
              						$location12=$_POST['location12'];
              				
              				
              						
              							
              					if(empty($_POST['datestarted1'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration1'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname1'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position1'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location12'])){
              						$error[] = 'Please fill in the location.';
              					}
              					
								if(empty($_POST['datestarted12'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration12'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname12'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position12'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location12'])){
              						$error[] = 'Please fill in the location.';
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

              			if (isset($_POST['next2'])&& $_POST['next2']== "submit")
                    {
                        
                       
              						//to be update the pic part

              						$sql = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted1','$position1','$duration1','$location1','$companyname1');";
										$sql1 = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted12','$position12','$duration12','$location12','$companyname12');";
              						if(mysqli_query($link, $sql)){
              									
                                if(mysqli_query($link, $sql1)){
              									echo 'success!';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=student_dashboard.php>';
              								}
									}
              								else{
              									echo ' fail!';
              									echo $sql;
              								}
              				}
              		}

              				  ?>
							  			<?php 
              					
              						if(isset($_POST['next3']) && $_POST['next3']=="submit"){
              							$id = $_SESSION['username'];
              						$datestarted2=$_POST['datestarted2'];
              						$duration2=$_POST['duration2'] ;
              						$companyname2=$_POST['companyname2'] ;
              						$position2=$_POST['position2'] ;
              						$location2=$_POST['location2'];
									$datestarted22=$_POST['datestarted22'];
              						$duration22=$_POST['duration22'] ;
              						$companyname22=$_POST['companyname22'] ;
              						$position22=$_POST['position22'] ;
              						$location22=$_POST['location22'];
									$datestarted23=$_POST['datestarted23'];
              						$duration23=$_POST['duration23'] ;
              						$companyname23=$_POST['companyname23'] ;
              						$position23=$_POST['position23'] ;
              						$location23=$_POST['location23'];
              				
              				
              						
              							
              					if(empty($_POST['datestarted2'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration2'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname2'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position2'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location2'])){
              						$error[] = 'Please fill in the location.';
              					}
              					if(empty($_POST['datestarted22'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration22'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname22'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position22'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location22'])){
              						$error[] = 'Please fill in the location.';
              					}
								if(empty($_POST['datestarted23'])){
              						$error[] = 'Please fill in the date started.';
              					}
              					if(empty($_POST['duration23'])){
              						$error[] = 'Please fill in the duration.';
              					}
              					if(empty($_POST['companyname23'])){
              						$error[] = 'Please fill in the company name.';
              					}
              					if(empty($_POST['position23'])){
              						$error[] = 'Please fill in your position in the company.';
              					}
              				
              				if(empty($_POST['location23'])){
              						$error[] = 'Please fill in the location.';
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

              			if (isset($_POST['next3'])&& $_POST['next3']== "submit")
                    {
                        
                       
              						//to be update the pic part

              						$sql = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted2','$position2','$duration2','$location2','$companyname2');";
										$sql2 = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted22','$position22','$duration22','$location22','$companyname22');";
										$sql3 = "INSERT INTO `workexperience`(`StuUsrName`, `DateStarted`, `Position`,`Duration`, `Location`, `CompanyName`)
              							VALUES ('$id','$datestarted23','$position23','$duration23','$location23','$companyname23');";
              						if(mysqli_query($link, $sql)){
              									
                                if(mysqli_query($link, $sql2)){
									if(mysqli_query($link, $sql3)){
              									echo 'success!';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=student_dashboard.php>';
              								}
								}
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
<script >
	$(document).ready(function() {
    $('#number').bind('change', function() {
        var elements = $('div.container1').children().hide(); // hide all the elements
        var value = $(this).val();

        if (value.length) { // if somethings' selected
            elements.filter('.' + value).show(); // show the ones we want
        }
    }).trigger('change');
});
</script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
</body>
</html>