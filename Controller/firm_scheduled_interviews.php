<?php 
	
	

  
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
        $link ="firm_calendar_internship.php";
        
        $interviews=get_scheduled_interviews($internshipID);
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
                    echo'<form action="../controller/meeting_interview.php" method="post">';
                    echo'<input type="hidden" name="id" value="'.$interview['interviewID'].'">';
                    echo'<input type="hidden" name="internshipid" value="'.$internshipID.'">';
                	echo '<td><button type="submit" name="done" class="btn btn-success btn-sm" >done</button>
                            <button type="submit" name="cancel" class="btn btn-danger btn-sm" >cancel</button></td>';
                    echo'</form>';
                	echo '</tr>';
                }

            }
        }

        else
        {
            echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td><b>No interviews scheduled</b></td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
        }


?>