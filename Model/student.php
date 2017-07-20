<?php
	

	/* Fonction permettant d'obtenir l'identifiant d'un etudiant en fonction de son nom*/
	function get_id_applicant($firmusrname)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `student` WHERE `FirmUsrName`= '$firmusrname' ";
    	
        $result = mysqli_query($link, $sql);
		
		return $result;
	}

	function get_student_info($usrname)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `stu_personal_info` WHERE `StuUsrName`= '$usrname' ";
    	
        $result = mysqli_query($link, $sql);
		
		return $result;
	}

	function get_student_skills($usrname,$internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `studentskills` WHERE `StudentID`= '$usrname' AND `InternshipID`= '$internshipID' "; 
    	
        $result = mysqli_query($link, $sql);

		
		return $result;
	}

		function get_student_persoskills($usrname,$internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `studentpersonalskills` WHERE `StudentID`= '$usrname' AND `InternshipID`= '$internshipID' ";
    	
        $result = mysqli_query($link, $sql);

		
		return $result;
	}

	function get_skill_name($skillID)
	{
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `practicalskills` WHERE `SkillsID`= '$skillID' ";
		$result = mysqli_query($link, $sql);
		
		foreach($result as $res)
		{
			$skillname=$res['SkillLabel'];
		}
		return $skillname;
		

		
		
	}

	function get_persoskill_name($skillID)
	{
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `personalskill` WHERE `PersonalSkillID`= '$skillID' ";
		$result = mysqli_query($link, $sql);

		foreach($result as $res)
		{
			$skillname=$res['PersonalSkillLabel'];
		}
		
		
		return $skillname;
	}


?>