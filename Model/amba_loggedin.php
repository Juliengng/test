<?php
	
	function personal_info($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `amb_personal_info` WHERE `AmbUsrName`='".$id."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function update_info($givenname,$lastname,$gender,$dob,$nationality,$mailingaddress,$contactnumber,$occupation,$skypenumber,$id){
		global $link;
		$sql="UPDATE `amb_personal_info` SET GivenName=IF(LENGTH('$givenname')=0, GivenName, '$givenname'),Occupation=IF(LENGTH('$occupation')=0, Occupation, '$occupation'), Surname=IF(LENGTH('$lastname')=0,Surname, '$lastname'), Gender=IF(LENGTH('$gender')=0, Gender, '$gender'), DateOfBirth=IF(LENGTH('$dob')=0, DateOfBirth, '$dob'), Nationality=IF(LENGTH('$nationality')=0, Nationality, '$nationality'), MailingAddress=IF(LENGTH('$mailingaddress')=0, MailingAddress, '$mailingaddress'), ContactNumber=IF(LENGTH('$contactnumber')=0, ContactNumber, '$contactnumber'), SkypeAccount=IF(LENGTH('$skypenumber')=0, SkypeAccount, '$skypenumber') WHERE AmbUsrName='$id'";
		$query = mysqli_query($link,$sql);
		return $query;
	
	}

	function get_email_amba($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `ambassador` WHERE `AmbUsrName`='".$id."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function internship_list_amba($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `internship` WHERE `PostedBy` = '".$id."' ");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function get_applicant($internshipid){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `application` WHERE `InternshipID`='".$internshipid."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function get_interview($internshipid){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `interview` WHERE `InternshipID`='".$internshipid."'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function advertisement_list($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `advertisement`");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function get_email($id){
		global $link;
		$query = mysqli_query($link,"SELECT * FROM `student` WHERE `StuUsrName`= '$id'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
?>
	