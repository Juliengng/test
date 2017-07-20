<?php 
  
  
	require('../database/mysql_connect.inc.php'); 
  
  
		$rows=personal_info_student($id);
		foreach($rows as $row){
		echo '<tr>';
		echo '<td><b>First name</b></td>';
		echo '<td>'.$row['Given Name'].'</td>';
		echo '</tr>';
		echo '<tr style="border-top:none">';
		echo '<td><b>Last name</b></td>';
		echo '<td class="none">'.$row['Surname'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Gender</b></td>';
		echo '<td>'.$row['Gender'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Date of birth</b></td>';
		echo '<td>'.$row['DateOfBirth'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Nationality</b></td>';
		echo '<td>'.$row['Nationality'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Passport number/ID number</b></td>';
		echo '<td>'.$row['PassportNumber'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Mailing address</b></td>';
		echo '<td>'.$row['MailingAddress'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Contact number</b></td>';
		echo '<td>'.$row['ContactNumber'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Skype account</b></td>';
		echo '<td>'.$row['SkypeAccount'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Study field</b></td>';
		echo '<td>'.$row['StudyField'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Major *speciality</b></td>';
		echo '<td>'.$row['Major'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>University name</b></td>';
		echo '<td>'.$row['UniversityName'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>GPA</b></td>';
		echo '<td>'.$row['GPA'].'</td>';
		echo '</tr>';
	}
	
?>