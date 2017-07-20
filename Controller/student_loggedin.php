<?php 
session_start();
require('../database/mysql_connect.inc.php'); 
require('../Model/student_loggedin.php'); 
 

  
  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'student') {
  
  $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
	$rows=personal_info_student($id);
	foreach($rows as $row){
	$profilepic= $row['stu_profile_pic'];
	$name = $row['Given Name'] . " " . $row['Surname'];
	$workexperience = $row['WorkExperience'];
	}
	$rows=get_email_student($id);
	foreach($rows as $row){
	$email= $row['StuEmail'];
		}
			$result=internship_count();
		$row_count = mysqli_num_rows($result);

	
  }
  else {
    header('Location: login.php');
    exit();
  }




?>