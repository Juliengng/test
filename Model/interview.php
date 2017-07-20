<?php

	/* creation de stage*/
	function add_interview($internshipID,$StuUsrnName,$interDate,$interTime)
	{
		
		include("mysql_connect.inc.php");
		
    	$interview= "INSERT INTO `interview`(`InternshipID`,`StuUsrName`,`interviewDate`,`interviewTime`,`status`) VALUES ('$internshipID','$StuUsrnName','$interDate','$interTime','scheduled')";

        $result = mysqli_query($link, $interview);
		
		
		
	}

		function get_interviews($internshipID)
	{
		
		include("mysql_connect.inc.php");
		
    	$interview= "INSERT INTO `interview`(`InternshipID`,`StuUsrnName`,`interviewDate`,`interviewTime`) VALUES ('$internshipID','$StuUsrnName','$interDate','$interTime')";

        $result = mysqli_query($link, $interview);
		
		
		return $internshipID;
	}


	function get_scheduled_interviews($internshipID)
	{
		
		include("mysql_connect.inc.php");
		
    	
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID'  AND `status`= 'scheduled' ORDER BY `interviewDate` ASC ";
        $result = mysqli_query($link, $sql);
		
		return $result;
		
		
		
	}

	function get_done_interviews($internshipID)
	{
		
		include("mysql_connect.inc.php");
		
    	
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID'  AND `status`= 'done' ";
        $result = mysqli_query($link, $sql);
		
		return $result;
			
	}

	function set_interview_done($interviewID)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `interview` SET `status`='done' WHERE `interviewID`='$interviewID'";
		$result = mysqli_query($link, $sql);
	}

	function set_interview_cancel($interviewID)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `interview` SET `status`='canceled' WHERE `interviewID`='$interviewID'";
		$result = mysqli_query($link, $sql);
	}

	function get_number_done($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID' and `status`= 'done' ";
    	
        $result = mysqli_query($link, $sql);
		$count =0;
		foreach($result as $res)
		{
			$count = $count +1;
		}
		
		return $count;
	}

	function get_number_scheduled($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID' and `status`= 'scheduled' ";
    	
        $result = mysqli_query($link, $sql);
		$count =0;
		foreach($result as $res)
		{
			$count = $count +1;
		}
		
		return $count;
	}

	function get_allinterviews($internshipID)
	{
		
		include("mysql_connect.inc.php");
		
    	
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID' ";
        $result = mysqli_query($link, $sql);
		
		return $result;
			
	}

	function get_user_interview($interviewID){
		include("mysql_connect.inc.php");
		
    	
		$sql = "SELECT * FROM `interview` WHERE `InternshipID`= '$internshipID' ";
        $result = mysqli_query($link, $sql);
		
		return $result;

	}

?>