<?php 
require('../controller/model.php');


session_start();

     if(isset($_POST['updatefirm']))
    {
        $name=htmlentities($_POST['name']);
        
        $number=htmlentities($_POST['number']);
        $startdate =htmlentities($_POST['startdate']);
        $price =htmlentities($_POST['price']);
        $location=htmlentities($_POST['country']);
        
        $living=htmlentities($_POST['living']);
        $description=htmlentities($_POST['description']);
        $duration=htmlentities($_POST['duration']);
        
        $deadline =htmlentities($_POST['deadline']);
        $sup=htmlentities($_POST['sup']);
		$internshipID=htmlentities($_POST['internshipID']);
	 	$firmname=$_POST['firmname'];
	 	$id =$_SESSION['username'];

	 	if($id == $firmname)
		{
			$result=update_internship($internshipID,$name,$number, $startdate,$price,$location,$living,$description,$duration,$deadline,$sup);
		} 
		
		
			
              header("location:../View/firm_calendar_internship.php?ID=".$internshipID);
			
			  exit();
        
 
       
 
    }








?>