<?php 


	/* Fonction permettant d'obtenir la liste des stages d'une entreprise.*/
	function get_process_applicants($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `application` WHERE `InternshipID`= '$internshipID' ORDER BY `match` DESC ";
        $result = mysqli_query($link, $sql);
		
		return $result;
	}

	function get_accepted_applicants($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `application` WHERE `InternshipID`= '$internshipID'  AND `status`= 'Accepted' ";
        $result = mysqli_query($link, $sql);
		
		return $result;
	}

	function update_applicant_status($internshipID,$name)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `application` SET `status`='Interview scheduled' WHERE `StuUsrName`='$name' and `InternshipID`='$internshipID'";
		$result = mysqli_query($link, $sql);
	}

	function set_applicant_accepted($internshipID,$name)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `application` SET `status`='Accepted' WHERE `StuUsrName`='$name' and `InternshipID`='$internshipID'";
		$result = mysqli_query($link, $sql);
	}

	function set_applicant_refused($internshipID,$name)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `application` SET `status`='Rejected' WHERE `StuUsrName`='$name' and `InternshipID`='$internshipID'";
		$result = mysqli_query($link, $sql);
	}

	function set_applicant_processing($internshipID,$name)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `application` SET `status`='Processing' WHERE `StuUsrName`='$name' and `InternshipID`='$internshipID'";
		$result = mysqli_query($link, $sql);
	}

	function set_applicant_waiting($internshipID,$name)
	{
		include("mysql_connect.inc.php");
		$sql = "UPDATE `application` SET `status`='Waiting List' WHERE `StuUsrName`='$name' and `InternshipID`='$internshipID'";
		$result = mysqli_query($link, $sql);
	}

		function get_applicant_status($internshipID,$name)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `application` WHERE `InternshipID`= '$internshipID'  AND `StuUsrName`= '$name' ";
        $result = mysqli_query($link, $sql);
      		
		return $result;
	}
?>
