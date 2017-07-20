<?php 
require('../controller/model.php');


session_start();

     if(isset($_POST['modifierfirm']))
    {
        $firmname = $_POST['firmname'];
		$firminsnum = $_POST['firminsnum'];
		$firmregnum = $_POST['firmregnum'];
		$supervisor = $_POST['supervisor'];
		$netprofit = $_POST['netprofit'];
		$employeenum = $_POST['employeenum'];
		$activity = $_POST['activity'];
		$skype = $_POST['skype'];
		
	 	
	 	$id =$_SESSION['username'];
		$result=update_firminfo($id,$firmregnum,$firminsnum,$supervisor,$firmname,$netprofit,$employeenum,$activity,$skype);
		
		if($result == true){
			
              header("location:../View/firm_settings.php");
			
			  exit();
        }
 
       header("location:../View/firm_modify_settings.php");
			  exit();
 
    }








?>