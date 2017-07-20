<?php 
	session_start();
	
 	require('model.php');
 	

 	$name= $_POST['id'];
 	$internshipID= $_POST['internshipid'];

 	
 		
 		set_applicant_processing($internshipID,$name);
 		header("Location: ../View/firm_calendar_internship.php?ID=" .$internshipID);
 		
 	

 
 	
 	
 		

 	
 ?>