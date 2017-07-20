<?php 
  
  
	require('../database/mysql_connect.inc.php'); 

	if(isset($_POST['refuse']))
{
	require('../model/student_loggedin.php'); 
	refuseinterview($_POST['refuse']);
	header ("Location:../view/student_interview.php");
	exit();
}	
	
	if(isset($_POST['accept']))
{
	require('../model/student_loggedin.php'); 
	acceptinterview($_POST['accept']);
	header ("Location:../view/student_interview.php");
	exit();
}	

  $counter=0;
  
		$rows=interview_list($id);
		foreach($rows as $row){
			$internships=get_internship($row['InternshipID']);
		echo '<tr>';
		foreach($internships as $internship){
		echo '<td>'.$internship['FirmUsrName'].'</td>';
		}
		$row['interviewDate'] = date("d/m/Y", strtotime($row['interviewDate']));
		echo '<td><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['interviewDate'].'</b></td>';
		
		echo '<td width="9%">'.$row['interviewTime'].'</td>';
		echo '<td width="17%"><i class="fa fa-hourglass-half" aria-hidden="true"></i> '.$row['status'].'</b></td>';
		if($row['studentreponse']=='')
		{
		echo '<td width="17%">   <button type="submit" name="refuse" value="'.$row['interviewID'].'" class="btn btn-danger" >Refuse</button>   <button type="submit" name="accept" value="'.$row['interviewID'].'" class="btn btn-primary" >Accept</button></td>';
		}
		else{
			echo'<td></td>';
		}
			
		echo '</tr>';
		
		
	}
	
		

	
?>