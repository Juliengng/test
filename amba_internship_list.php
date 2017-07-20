<?php

  
	require('../database/mysql_connect.inc.php'); 

	
		$rows=internship_list($id);
		foreach($rows as $row){
		echo '<tr>';
		echo '<td><br><a href="#" class="button-mdn dark" data-toggle="modal" data-target="#internship1">'.$row['JobTitle'].'</b></a><br><br>October 2016 - January 2017<br>Company: Boardingates<br><br><img src="assets/img/boardingates.png" width="50" height="40" class="mb-7 hero-image"></td>';
		echo '<td>4 applicants</b><br><br>3 interviews - Kevin Hassan <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- San Wei Lee<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Mehdi Delvaux</b><br><br>1 hired - San Wei LEE</b></td>';
		echo '<td width="17%"><i class="fa fa-money" aria-hidden="true"></i> 150 euros</td>';
		echo '<td><i class="fa fa-money" aria-hidden="true"></i> 100 euros</b><br> <i class="fa fa-check-square" aria-hidden="true"></i><font color="black"> Paid on 15/01/2017</font></b></td>';
		echo '</tr>';

		}











?>