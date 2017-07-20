<?php

	/* creation de stage*/
	function create_internship($firmusrname,$jobtitle,$sup,$jobcategory,$quota,$durationstart,$salary,$location,$language,$language2,$language3,$languagelevel,$languagelevel2,$languagelevel3,$living,$description,$applicationdeadline,$duration)
	{
		
		include("mysql_connect.inc.php");
		
    	$internship= "INSERT INTO `internship`(`FirmUsrName`,`JobTitle`,`Supervisor`,`JobCategory`,`Quota`,`DurationStart`,`Salary`,`Location`,`Language`,`Language2`,`Language3`,`LanguageLevel`,`Language2Level`,`Language3Level`,`LivingCost`,`Description`,`PostedBy`,`InternAgreement`,`Tips`,`ApplicationDeadline`,`Duration`) VALUES ('$firmusrname','$jobtitle','$sup','$jobcategory','$quota','$durationstart','$salary','$location','$language','$language2','$language3','$languagelevel','$languagelevel2','$languagelevel3','$living','$description','$firmusrname','null','0','$applicationdeadline','$duration')";
        $result = mysqli_query($link, $internship);
		$internshipID=mysqli_insert_id($link);
       
		
		return $internshipID;
	}
	
	function create_internship_amba($tips,$id,$jobtitle,$jobcategory,$companyname,$quota,$durationstart,$salary,$location,$language,$language2,$language3,$languagelevel,$languagelevel2,$languagelevel3,$living,$description,$applicationdeadline,$duration)
	{
		
		include("mysql_connect.inc.php");
		
    	$internship= "INSERT INTO `internship`(`FirmUsrName`,`JobTitle`,`JobCategory`,`Quota`,`DurationStart`,`Salary`,`Location`,`Language`,`Language2`,`Language3`,`LanguageLevel`,`Language2Level`,`Language3Level`,`LivingCost`,`Description`,`PostedBy`,`InternAgreement`,`Tips`,`ApplicationDeadline`,`Duration`) VALUES ('$companyname','$jobtitle','$jobcategory','$quota','$durationstart','$salary','$location','$language','$language2','$language3','$languagelevel','$languagelevel2','$languagelevel3','$living','$description','$id','null','$tips','$applicationdeadline','$duration')";
        $result = mysqli_query($link, $internship);
		$internshipID=mysqli_insert_id($link);
       
		
		return $internshipID;
	}

	/* suppression d'un stage*/
	function delete_internship($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "DELETE FROM `internship` WHERE `InternshipID`= '$internshipID' ";
    	 
        $result = mysqli_query($link, $sql);
		
		
	}

		/* ajout d'un skill*/
	function add_skills($internshipID,$skill,$rank)
	{
		
		include("mysql_connect.inc.php");
		
		echo $skill="INSERT INTO `internshipskills`(`InternshipID`,`SkillID`,`rank`) VALUES ('$internshipID','$skill','$rank')";
		$result = mysqli_query($link, $skill);
		
	}

	// ajout d'un personal skill
	function add_personalskills($internshipID,$persoskillID)
	{
		
		include("mysql_connect.inc.php");
		
		$persoskill="INSERT INTO `internshippersonalskills`(`InternshipID`,`PersonalSkillID`) VALUES ('$internshipID','$persoskillID')";
		$result = mysqli_query($link, $persoskill);
		
	}


	/* Fonction permettant d'obtenir la liste des postulants à ce stage*/
	function get_applicants($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `application` WHERE `InternshipID`= '$internshipID' ORDER BY `match` DESC";
    	
        $result = mysqli_query($link, $sql);
		
		return $result;
	}

	/* Fonction permettant d'obtenir la liste des postulants à ce stage*/
	function get_number_applicants($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `application` WHERE `InternshipID`= '$internshipID' ";
    	
        $result = mysqli_query($link, $sql);
		$count =0;
		foreach($result as $res)
		{
			$count = $count +1;
		}
		
		return $count;
	}


	function matching($internshipID,$id)
	{
	 include("mysql_connect.inc.php");
		
	  $sql = "SELECT * FROM `InternshipSkills` WHERE `InternshipID` = '$internshipID'";
	  $res = mysqli_query($link, $sql);
	  $internshipSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

	  $sql = "SELECT * FROM `InternshipPersonalSkills` WHERE `InternshipID` = '$internshipID'";
	  $res = mysqli_query($link, $sql);
	  $internshipPersSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

	  $sql = "SELECT * FROM `StudentSkills` WHERE `StudentID` = '$id'AND `InternshipID` = '$internshipID'";
	  $res = mysqli_query($link, $sql);
	  $studentSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);

	  $sql = "SELECT * FROM `StudentPersonalSkills` WHERE `StudentID` = '$id' AND `InternshipID` = '$internshipID'";
	  $res = mysqli_query($link, $sql);
	  $studentPersSkills = mysqli_fetch_all($res, MYSQLI_ASSOC);
	  $count=0;

	  foreach ($internshipSkills as $intSkill)
	  {
	    foreach ($studentSkills as $studSkill)
	    {
	      if ($intSkill['SkillID'] == $studSkill['SkillID']) 
	      {
	        $count = $count+1;
	      }
	    }
	  }

	  foreach ($internshipPersSkills as $intpSkill) 
	  {
	    foreach ($studentPersSkills as $studpSkill)
	    {
	      if ($intpSkill['PersonalSkillID'] == $studpSkill['PersonalSkillID']) 
	      {
	        $count = $count+1;
	      }
	    }
	  }

	  $skillCount = count($internshipSkills) + count($internshipPersSkills);
	  if($skillCount!=0)
	  {$match = intval(($count*100)/$skillCount);}
	  else
	  {
	  	$match=0;
	  }

	  try 
	  {
	   
	    $sql = "UPDATE `application` SET `match` ='$match' WHERE `StuUsrName` = '$id' AND `InternshipID`= '$internshipID'";
	    mysqli_query($link, $sql);
	  } catch (Exception $e) 
	  {
	    exit('<p>Erreur lors de l\'insertion des données<br/>'.$e->getMessage().'</p>');
	  }
	}

	function get_jobcategory()
	{	
		include("mysql_connect.inc.php");
			$sql = "
				SELECT
				   `SkillCategory`
				FROM
				  `practicalskills`
                  GROUP BY  `SkillCategory`
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arrayJobCategory[]=$row[0];
				}

		return $arrayJobCategory;
	}

	function get_language()
	{	
		include("mysql_connect.inc.php");
			$sql = "
				SELECT
				   `LanguageLabel`
				FROM
				  `language`
                  
				";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_row($result))
				{
					$arraylang[]=$row[0];
				}

		return $arraylang;
	}

	function get_skills()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM skill";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}

	function get_personalskills()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM PersonalSkill";
		  $result = mysqli_query($link, $sql);
		  $i = 0;
		  if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $persoskills[$i] = $row;
		      $i++;
		    }
		  }

		 return $persoskills;
	}

		function get_internship_infos($internshipID)
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `internship` WHERE `InternshipID`='$internshipID'";
		  $result = mysqli_query($link, $sql);
		  

		 return $result;
	}
	
	function get_skills_receptionist()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `practicalskills` WHERE `SkillCategory`='Receptionist'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
	function get_skills_chef()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `practicalskills` WHERE `SkillCategory`='Chef'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
	function get_skills_waiter()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `practicalskills` WHERE `SkillCategory`='Waiter'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
	function get_skills_bartender()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `practicalskills` WHERE `SkillCategory`='Bartender'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
	function get_personalskills_bartender()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `personalskill` WHERE `SkillCategory`='Bartender'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
		function get_personalskills_chef()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `personalskill` WHERE `SkillCategory`='Chef'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
		function get_personalskills_receptionist()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `personalskill` WHERE `SkillCategory`='Receptionist'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
		function get_personalskills_waiter()
	{
		 include("mysql_connect.inc.php");

		  $sql = "SELECT * FROM `personalskill` WHERE `SkillCategory`='Waiter'";
		  $result = mysqli_query($link, $sql);
		  $i=0;
		 if($result) {
		    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $skills[$i] = $row;
		      $i++;
		    }
		  }

		  

		 return $skills;
	}
	
	function get_internship_skills($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `internshipskills` WHERE  `InternshipID`= '$internshipID' "; 
    	
        $result = mysqli_query($link, $sql);

		
		return $result;
	}
	
	function get_internship_persoskills($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `internshippersonalskills` WHERE `InternshipID`= '$internshipID' ";
    	
        $result = mysqli_query($link, $sql);

		
		return $result;
	}

	function get_internship_info($internshipID)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `internship` WHERE `InternshipID`= '$internshipID' ";
    	
        $result = mysqli_query($link, $sql);

		
		return $result;
	}

	function update_internship($internshipID,$name,$number, $startdate,$price,$location,$living,$description,$duration,$deadline,$sup)
	{
		include("mysql_connect.inc.php");

		echo $sql="UPDATE `internship` SET `JobTitle`=IF(LENGTH('$name')=0, `JobTitle`, '$name'), `Quota`=IF(LENGTH('$number')=0,`Quota`, '$number'), `Supervisor`=IF(LENGTH('$sup')=0,`Supervisor`, '$sup'), `DurationStart`=IF(LENGTH('$startdate')=0,`DurationStart`, '$startdate'), `Salary`=IF(LENGTH('$price')=0, `Salary`, '$price'), `Location`=IF(LENGTH('$location')=0, `Location`, '$location'), `LivingCost`=IF(LENGTH('$living')=0, `LivingCost`, '$living'), `Description`=IF(LENGTH('$description')=0, `Description`, '$description'), `Duration`=IF(LENGTH('$duration')=0, `Duration`, '$duration'), `ApplicationDeadline`=IF(LENGTH('$deadline')=0, `ApplicationDeadline`, '$deadline') WHERE `InternshipID`='$internshipID'";
		$query = mysqli_query($link,$sql);
		return $query;
	
	}
?>