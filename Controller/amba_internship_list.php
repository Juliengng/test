<?php

  
	require('../database/mysql_connect.inc.php'); 

	
		$rows=internship_list_amba($id);
		foreach($rows as $row){
			$applicants=get_applicant($row['InternshipID']);
			$row_count = count($applicants);
			$interviews= get_interview($row['InternshipID']);
			$interview_count = count($interviews);
			
		echo '<tr>';
		echo '<td><br><a href="#" class="button-mdn dark" data-toggle="modal" data-target="#internship1">'.$row['JobTitle'].'</b></a><br><br>Starting Date : '.$row['DurationStart'].'<br>Duration : '.$row['Duration'].'<br>Company: '.$row['FirmUsrName'].'<br><br><img src="assets/img/boardingates.png" width="50" height="40" class="mb-7 hero-image"></td>';
		echo '<td>'.$row_count.' applicants</b><br><br>'.$interview_count.' interviews - ';
		foreach($interviews as $interview){
		echo $interview['StuUsrName'];
		}
		echo ' <br></b><br><br>Hired -' ;
		foreach($applicants as $applicant){
		
		if($applicant['status'] == 'Accepted')
		{
			echo $applicant['StuUsrName'];
		}
		
		}
		
		echo '</td>';
		echo '<td width="17%"><i class="fa fa-money" aria-hidden="true"></i> '.$row['Tips'].' euros</td>';
		echo '<td><i class="fa fa-money" aria-hidden="true"></i> 100 euros</b><br> <i class="fa fa-check-square" aria-hidden="true"></i><font color="black"> Paid on 15/01/2017</font></b></td>';
		echo '</tr>';

		}

?>