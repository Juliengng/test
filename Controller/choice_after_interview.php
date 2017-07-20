<?php 
	session_start();
	
 	require('../Model/firm.php');
 	require('../Model/applicant.php');
 	require('../Model/interview.php');

 	$internshipID= $_POST['InternshipID'];
 	$name= $_POST['appname'];

 	if(isset($_POST['accepted']))
 	{
 		
 		set_applicant_accepted($internshipID,$name);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 		
 	}
 	else if(isset($_POST['refused']))
 	{
 		set_applicant_refused($internshipID,$name);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 		
 	}
 	else
 	{
 		
 		set_applicant_waiting($internshipID,$name);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 	}
 	
 	
 		

 	
 ?>