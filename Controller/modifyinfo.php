<?php 
		require('../database/mysql_connect.inc.php'); 
require_once('../Model/amba_loggedin.php'); 
require_once('../Model/student_loggedin.php'); 
session_start();

     if((isset$_POST['modifieramba'])){
        $givenname = $_POST['givenname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$nationality = $_POST['nationality'];
		$mailingaddress = $_POST['mailingaddress'];
		$contactnumber = $_POST['contactnumber'];
		$occupation = $_POST['occupation'];
		$skypenumber = $_POST['skypenumber'];
	 	$id = $_SESSION['username'] ;
	 
		$result=update_info($givenname,$lastname,$gender,$dob,$nationality,$mailingaddress,$contactnumber,$occupation,$skypenumber,$id);
		if($result == true){
			
              header("location:../View/amb_dashboard_profile.php");
			
			  exit();
        }
 
       header("location:../View/ambassador_modify_profile.php");
			  exit();
 
    }

if(isset($_POST['modifierstudent'])){
        $givenname = $_POST['givenname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$nationality = $_POST['nationality'];
		$mailingaddress = $_POST['mailingaddress'];
		$contactnumber = $_POST['contactnumber'];
		$passport = $_POST['passport'];
		$skypenumber = $_POST['skypenumber'];
		$studyfield = $_POST['studyfield'];
		$major = $_POST['major'];
		$gpa = $_POST['gpa'];
		$universityname = $_POST['universityname'];
		$workexperience = $_POST['workexperience'];
	 $id = $_SESSION['username'] ;
	 
		$result=update_info_student($givenname,$lastname,$gender,$dob,$nationality,$mailingaddress,$contactnumber,$skypenumber,$passport,$studyfield,$major,$gpa,$universityname,$workexperience,$id);
		if($result == true){
			
              header("location:../View/student_dashboard_profile.php");
			
			  exit();
        }
 
       header("location:../View/student_modify_profile.php");
	   exit();
 
    }

    if(isset($_POST['modifierfirm'])){
        $firmname = $_POST['firmname'];
		$firminsnum = $_POST['firminsnum'];
		$firmregnum = $_POST['firmregnum'];
		$supervisor = $_POST['supervisor'];
		$activity = $_POST['activity'];
		$skype = $_POST['skype'];		
	 	$id = $_SESSION['username'] ;
	 
		$result=update_firminfo($id,$firmregnum,$firminsnum,$supervisor,$firmname,$activity,$skype);
		if($result == true){
			
              header("location:../View/firm_settings.php");
			
			  exit();
        }
 
       header("location:../View/firm_modify_settings.php");
	   exit();
 
    }





?>