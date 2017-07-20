<?php 
	session_start();
	
 	require('../Model/firm.php');
 	require('../Model/applicant.php');
 	require('../Model/interview.php');

 	
 	if(isset($_POST['dating']) && isset($_POST['timing']) && isset($_POST['appname']) && isset($_POST['internshipID']))
 	{
 		$date= $_POST['dating'];
 		$time= $_POST['timing'];
 		$name= $_POST['appname'];
 		$date2= $_POST['datin'];
 		$time2= $_POST['timin'];
 		$date3= $_POST['dati'];
 		$time3= $_POST['timi'];
 		
 		$internshipID= $_POST['internshipID'];
 		$_SESSION['internshipID'] = $internshipID;

 		
 		
 		add_interview($internshipID,$name,$date,$time);
 		
 		if(isset($_POST['datin']) && isset($_POST['timin']))
 		{
 			add_interview($internshipID,$name,$date2,$time2);
 		}
 		if(isset($_POST['dati']) && isset($_POST['timi']))
 		{ 		
 			add_interview($internshipID,$name,$date2,$time2);
 		}
 		
 		
 		//update_applicant_status($internshipID,$name);
 		header("Location: ../View/firm_calendar_internship.php");
 	
 		
 		
 	}

 	else{

 		header("Location: ../View/firm_calendar_internship.php");
 	}
 ?>