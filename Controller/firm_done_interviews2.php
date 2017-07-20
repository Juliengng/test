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
                
                    
                    $name =$interview['StuUsrName'];
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
                                    </div>';
                                    
                                    

                    $status =get_applicant_status($internshipID,$name);

                    foreach($status as $statu)
                    {
                        if($statu['status']=='Processing' || $statu['status']=='Interview scheduled' || $statu['status']=='Interview done' )
                        {
                            echo'<form action="../controller/choice_after_interview.php" method="post">
                            <input type="hidden" name="appname" value="'.$interview['StuUsrName'].'">
                            <input type="hidden" name="InternshipID" value="'.$interview['InternshipID'].'">
                            <div class="col-md-4">
                            	<button type="submit" name="accepted" method="post" class="btn btn-success btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button></td>
                                <button type="submit" name="refused" method="post" class="btn btn-danger btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></button></td>
                               <button type="submit" name="waiting" method="post" class="btn btn-warning btn-sm" value="'.$interview['interviewID'].'"><span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span></button>   
                            </div>
                            </form>
                        </div>
                        </div>';
                        }
                        else if ($statu['status']=='Waiting List') 
                        {
                            echo'<form action="../controller/choice_after_interview.php" method="post">
                            <input type="hidden" name="appname" value="'.$interview['StuUsrName'].'">
                            <input type="hidden" name="InternshipID" value="'.$interview['InternshipID'].'">
                            <div class="col-md-4">
                            <button type="submit" name="accepted" method="post" class="btn btn-success btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button>
                            <button type="submit" name="refused" method="post" class="btn btn-danger btn-sm" value="'.$interview['interviewID'].'" ><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></span></button>
							<b> <span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span></b><br>			
                           </div>
                            </form>
                        </div>
                        </div>';
                        }
                        else
                        {   echo'<div class="col-md-4">
                            <b><i>'.$statu['status'].'</i></b>
                              </div>
                            </div>
                            </div>';
                        }
                	   
                    }
                }    
            }
        }

        else
        {
             echo '<h4><b>No interviews scheduled</b></h4>';
        }

?>