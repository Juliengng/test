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
                	echo' <div class="line">
                                <div class="row hov">
                                    <div class="col-md-2">
                                     <h4><b>'.$info['Given Name'].'</b></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4><b>'.$interview['interviewDate'].'</b></h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4><b>'.$interview['interviewTime'].'</b></h4>
                                    </div>
                                    <form action="../controller/meeting_interview.php" method="post">
                                        <input type="hidden" name="id" value="'.$interview['interviewID'].'">
                                        <input type="hidden" name="internshipid" value="'.$internshipID.'">';

                                    if($interview['studentreponse'] =="accepted")
                                    {
                                    echo'<div class="col-md-4">
                                        <button type="submit" name="done" class="btn btn-success btn-sm" >Completed</button>
                                        <button type="submit" name="cancel" class="btn btn-danger btn-sm" >Cancel</button>
                                    </div>
                                    </form>
                                </div>
                        </div>';
                                    }
                                    else
                                    {
                                        echo'<div class="col-md-4">
                                        <h4>Waiting for student\'s response</h4>
                                    </div>
                                    </form>
                                </div>
                        </div>';

                                    }

                                
                }

            }
        }

        else
        {
            
                echo '<h4><b>No interviews scheduled</b></h4>';
                
            
        }


?>