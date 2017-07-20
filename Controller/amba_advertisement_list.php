<?php

  
	require('../database/mysql_connect.inc.php'); 

		$rows=advertisement_list($id);
		foreach($rows as $row){
			$emails=get_email($row['StuUsrName']);
		echo '<tr>';
		echo '<td>'.$row['position'].'</b></td>';
		echo '<td>'.$row['StuUsrName'].'</td>';
			foreach($emails as $email){
		echo '<td>'.$email['StuEmail'].'</td>';
			}
		echo '<td> '.$row['Language'].'</td>';
		echo '<td>'.$row['Duration'].'</td>';
		echo '<td>'.$row['Location'].'</td>';
		
		echo '</tr>';

		}

?>