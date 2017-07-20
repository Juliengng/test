<?php 
  
  
	require('../database/mysql_connect.inc.php'); 
  
  
		$rows=personal_info($id);
		foreach($rows as $row){
		echo '<tr>';
		echo '<td><b>First Name</b></td>';
		echo '<td>'.$row['GivenName'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Last Name</b></td>';
		echo '<td>'.$row['Surname'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Gender</b></td>';
		echo '<td>'.$row['Gender'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Date of Birth</b></td>';
		echo '<td>'.$row['DateOfBirth'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Nationality</b></td>';
		echo '<td>'.$row['Nationality'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Mailing Address</b></td>';
		echo '<td>'.$row['MailingAddress'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Contact Number</b></td>';
		echo '<td>'.$row['ContactNumber'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Skype Account</b></td>';
		echo '<td>'.$row['SkypeAccount'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Occupation</b></td>';
		echo '<td>'.$row['Occupation'].'</td>';
		echo '</tr>';
	}
	
?>