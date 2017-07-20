<?php
function internship_list(){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `internship`");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function internship_count(){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `internship`");
		
		return $query;
	}
	
	function personal_info_student($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `stu_personal_info` WHERE `StuUsrName`='".$id."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function update_info_student($givenname,$lastname,$gender,$dob,$nationality,$mailingaddress,$contactnumber,$skypenumber,$passport,$studyfield,$major,$gpa,$universityname,$workexperience,$id){
		global $link;
		$sql="UPDATE `stu_personal_info` SET `Given Name`=IF(LENGTH('$givenname')=0, `Given Name`, '$givenname'), PassportNumber=IF(LENGTH('$passport')=0,PassportNumber, '$passport'), Surname=IF(LENGTH('$lastname')=0,Surname, '$lastname'), Gender=IF(LENGTH('$gender')=0, Gender, '$gender'), DateOfBirth=IF(LENGTH('$dob')=0, DateOfBirth, '$dob'), Nationality=IF(LENGTH('$nationality')=0, Nationality, '$nationality'), MailingAddress=IF(LENGTH('$mailingaddress')=0, MailingAddress, '$mailingaddress'), ContactNumber=IF(LENGTH('$contactnumber')=0, ContactNumber, '$contactnumber'), SkypeAccount=IF(LENGTH('$skypenumber')=0, SkypeAccount, '$skypenumber'), StudyField=IF(LENGTH('$studyfield')=0, StudyField, '$studyfield'), Major=IF(LENGTH('$major')=0, Major, '$major'), UniversityName=IF(LENGTH('$universityname')=0, UniversityName, '$universityname'), GPA=IF(LENGTH('$gpa')=0, GPA, '$gpa'), WorkExperience=IF(LENGTH('$workexperience')=0, WorkExperience, '$workexperience') WHERE StuUsrName='$id'";
		$query = mysqli_query($link,$sql);
		return $query;
	
	}
	
	function get_email_student($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `student` WHERE `StuUsrName`='".$id."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function get_posterpic($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `amb_personal_info` WHERE `AmbUsrName`='".$id."'");
		$row = mysqli_fetch_assoc($query);
		if($row=='')
		{
			$query = mysqli_query($link,"SELECT * FROM `firm_info` WHERE `FirmUsrName`='".$id."'");
			$row = mysqli_fetch_assoc($query);
		}
		return $row;
	}
	
	function get_postername($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `amb_personal_info` WHERE `AmbUsrName`='".$id."'");
		$row = mysqli_fetch_assoc($query);
		$name = $row['GivenName'];
		if($row=='')
		{
			$query = mysqli_query($link,"SELECT * FROM `firm_info` WHERE `FirmUsrName`='".$id."'");
			$row = mysqli_fetch_assoc($query);
			$name = $row['FirmUsrName'];
		}
		return $name;
	}
	
	function isamba($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `amb_personal_info` WHERE `AmbUsrName`='".$id."'");
		$row = mysqli_fetch_assoc($query);
		if($row=='')
		{
			return 0;
		}
		return 1;
	}
	
	function insert_internship($internshipid,$id){
		global $link;
		$sql="INSERT INTO `application`(`StuUsrName`, `InternshipID`,`status`) VALUES ('$id', '$internshipid','Processing');";
		$query = mysqli_query($link,$sql);
		return $query;
	
	}
	
	function interview_list($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `interview` WHERE `StuUsrName` = '$id'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function get_internship($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `internship` WHERE `InternshipID` = '$id'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function add_advertisement($id,$position,$language,$duration,$location){
		global $link;
		$sql="INSERT INTO `advertisement`(`StuUsrName`, `position`,`Language`,`Duration`,`Location`) VALUES ('$id', '$position','$language','$duration','$location');";
		$query = mysqli_query($link,$sql);
		
		return $query;		
	}
	
	function get_skills_student($category)
	{
		 include("../database/mysql_connect.inc.php");

		  $sql = "SELECT * FROM `PracticalSkills` WHERE `SkillCategory`='$category'";
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
	
		function get_personalskills_student($category)
	{
		 include("../database/mysql_connect.inc.php");

		  $sql = "SELECT * FROM `PersonalSkill` WHERE `SkillCategory`='$category'";
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
	
		function add_skills_student($id,$internshipID,$skill)
	{
		
		include("mysql_connect.inc.php");
		
		$skill="INSERT INTO `studentskills`(`StudentID`,`SkillID`,`InternshipID`) VALUES ('$id','$skill','$internshipID')";
		$result = mysqli_query($link, $skill);
		
	}
	
		function add_personalskills_student($id,$internshipID,$skill)
	{
		
		include("mysql_connect.inc.php");
		
		$skill="INSERT INTO `studentpersonalskills`(`StudentID`,`PersonalSkillID`,`InternshipID`) VALUES ('$id','$skill','$internshipID')";
		$result = mysqli_query($link, $skill);
		
	}
	
	function refuseinterview($id)
	{
		global $link;
		$sql="UPDATE `interview` SET `studentreponse`='refused',`status`='canceled' WHERE `InterviewID`='$id'";
		$query = mysqli_query($link,$sql);
		return $query;
		
	}
	
	function acceptinterview($id)
	{
		global $link;
		$sql="UPDATE `interview` SET `studentreponse`='accepted',`status`='scheduled' WHERE `InterviewID`='$id'" ;
		$query = mysqli_query($link,$sql);
		return $query;
		
	}
	
	function delete_student($id)
	{
		global $link;
		$sql="DELETE FROM student
WHERE `StuUsrName` = '".$id."'";
$query = mysqli_query($link,$sql);
		return $query;
		
	}
	
	function personal_info_work($id)
	{
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `workexperience` WHERE `StuUsrName`='".$id."'");

		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
		
	}
	
	?>