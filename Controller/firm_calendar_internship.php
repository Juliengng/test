<?php 
if(!isset($_SESSION['internshipID'])&& !isset($_GET['ID']))
{
  header("Location: firm_calendar.php");
}
else
{	if(isset($_GET['ID']))
	{
   		$internshipID=$_GET['ID'];
	}
	else
	{
		$internshipID=$_SESSION['internshipID'];
	}
   
}



?>