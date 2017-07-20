<?php 
	session_start();
	
 	require('../Model/firm.php');
 	require('../Model/applicant.php');
 	require('../Model/interview.php');

 	$interviewID= $_POST['id'];
 	$internshipID= $_POST['internshipid'];

 	if(isset($_POST['done']))
 	{
 		
 		set_interview_done($interviewID);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 		
 	}

 	else
 	{
 		
 		set_interview_cancel($interviewID);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 	}
 	
 	
 		

 	
 ?>