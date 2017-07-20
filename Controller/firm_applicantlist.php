<?php 
	
	


  
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
        $link ="firm_calendar_internship.php";
        
        $applicants=get_process_applicants($internshipID);
        $nb=mysqli_num_rows($applicants);  
        $i=0;

        if($nb!=0)
        {
          foreach($applicants as $applicant)
          {   
            $stu_info=get_student_info($applicant['StuUsrName']);
            foreach($stu_info as $info)
              {
              	echo '<tr>';
              	echo '<td>'.$info['Given Name'].'</td>';
                echo '<td><div class="progress">
                          <div class="progress-bar progress-bar-custom progress-bar-striped" role="progressbar" aria-valuenow="'.$applicant['match'].'" aria-valuemin="0" aria-valuemax="100" style="width:'.$applicant['match'].'%">
                                          '.$applicant['match'].'%
                                        </div> 
                                        </div></td>';
              	echo '<td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#'.$i.'">Plan</button></td>';
              	echo '</tr>';

                  echo'<div id="'.$i.'" class="modal fade" role="dialog">';
                      echo'<div class="modal-dialog">';

                             
                               echo'<div class="modal-content">';
                                 echo'<div class="modal-header">';
                                   echo'<button type="button" class="close" data-dismiss="modal" style="color:black">×</button>';
                                   echo'<h4 class="modal-title">Plan an interview with '.$info['Given Name'].' '.$info['Surname'].' </h4>';
                                 echo'</div>';
                                 echo'<div class="modal-body">';
                                 echo'<form method="post" action="../Controller/plan_interview.php">';
                                  echo'<p><h5>Interview date 1</h5><input type="date" placeholder="Date" name="dating" class="add_intern"></p>';
                                  echo'<p><h5>Interview Hour 1</h5><input type="time" placeholder="Time" name="timing" class="add_intern"></p>';
                                  echo'<p><h5>Interview date 2</h5><input type="date" placeholder="Date" name="datin" class="add_intern"></p>';
                                  echo'<p><h5>Interview Hour 2</h5><input type="time" placeholder="Time" name="timin" class="add_intern"></p>';
                                  echo'<p><h5>Interview date 3</h5><input type="date" placeholder="Date" name="dati" class="add_intern"></p>';
                                  echo'<p><h5>Interview Hour 3</h5><input type="time" placeholder="Time" name="timi" class="add_intern"></p>';
                                  echo'<input type="hidden" name="appname" value="'.$applicant['StuUsrName'].'">';
                                  echo'<input type="hidden" name="internshipID" value="'.$internshipID.'">';
                                 echo'<div class="modal-footer">';
                                   echo'<button type="submit" class="add_intern" >Send request</button>';
                                 echo'</div>';
                                 echo'</form>';
                               echo'</div>';

                             echo'</div>';
                           echo'</div>';
                 $i++;
            }
          }
      }
      else
      {
         echo '<tr>';
                echo '<td></td>';
                
                echo '<td><b>No applicants</b></td>';
                
                echo '<td></td>';
        echo '</tr>';
      }



?>