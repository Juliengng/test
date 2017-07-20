<?php 
  
  
	require('../database/mysql_connect.inc.php'); 
  
  $i=1;
		$rows=personal_info_work($id);
		foreach($rows as $row){
			echo '<div class="col-sm-6">
				<table class="responstable1">
  
  <tr>
    <th>Work Experience '.$i.'</th>
    <th><span></span></th>

  </tr> ';
		echo '<tr>';
		echo '<td><b>Date started</b></td>';
		echo '<td>'.$row['DateStarted'].'</td>';
		echo '</tr>';
		echo '<tr style="border-top:none">';
		echo '<td><b>Position</b></td>';
		echo '<td class="none">'.$row['Position'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Duration</b></td>';
		echo '<td>'.$row['Duration'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Location</b></td>';
		echo '<td>'.$row['Location'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td><b>Company name</b></td>';
		echo '<td>'.$row['CompanyName'].'</td>';
		echo '</tr>';
		echo '</table>
</div>	';
		$i= $i +1;
	}
	
?>