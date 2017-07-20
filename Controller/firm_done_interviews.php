<?php 
	
	


  
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
        $link ="firm_calendar_internship.php";
        
        $interviews=get_done_interviews($internshipID);
        $nb=mysqli_num_rows($interviews);    
        $i=0;

        if($nb!=0)
        {
            foreach($interviews as $interview)
            { 

                $stu_info=get_student_info($interview['StuUsrName']);
                foreach($stu_info as $info)
                {  
                	echo '<tr>';
                    echo '<td>'.$info['Given Name'].' </td>';
                    echo '<td>'.$interview['interviewDate'].'</td>';
                    echo '<td>'.$interview['interviewTime'].'</td>';
                    $name =$interview['StuUsrName'];

                    $status =get_applicant_status($internshipID,$name);

                    foreach($status as $statu)
                    {
                        if($statu['status']=='Processing' || $statu['status']=='Interview scheduled' || $statu['status']=='Interview done' )
                        {
                            echo'<form action="../controller/choice_after_interview.php" method="post">';
                            echo'<input type="hidden" name="appname" value="'.$interview['StuUsrName'].'">';
                            echo'<input type="hidden" name="InternshipID" value="'.$interview['InternshipID'].'">';
                        	echo '<td>  <button type="submit" name="accepted" method="post" class="btn btn-success btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button></td>';
                            echo '<td> <button type="submit" name="refused" method="post" class="btn btn-danger btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>';
                            echo '<td> <button type="submit" name="waiting" method="post" class="btn btn-warning btn-sm" value="'.$interview['interviewID'].'"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></button></td>';
                            echo'</form>';
                        }
                        else if ($statu['status']=='Waiting List') 
                        {
                            echo'<form action="../controller/choice_after_interview.php" method="post">';
                            echo'<input type="hidden" name="appname" value="'.$interview['StuUsrName'].'">';
                            echo'<input type="hidden" name="InternshipID" value="'.$interview['InternshipID'].'">';
                            
                            echo '<td><button type="submit" name="accepted" method="post" class="btn btn-success btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button></td>';
                            echo '<td><button type="submit" name="refused" method="post" class="btn btn-danger btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>';
							echo '<td>'.$statu['status'].'</td><br>';			
                            echo'</form>';
                        }
                        else
                        {
                            echo '<td>'.$statu['status'].'</td>';
                        }
                	   echo '</tr>';
                    }
                }    
            }
        }

        else
        {
            echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td><b>No interviews done</b></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
        }

?>