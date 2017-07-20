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
              	echo' <div class="line">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4><b>'.$info['Given Name'].'</b></h4>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="progress" >
                                          <div class="progress-bar progress-bar-custom progress-bar-striped" role="progressbar" aria-valuenow="'.$applicant['match'].'" aria-valuemin="0" aria-valuemax="100" style="width:'.$applicant['match'].'%">
                                                          '.$applicant['match'].'%
                                          </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <button type="button" class="sub b" data-toggle="modal" data-target="#'.$i.'">Plan</button>
                                    </div>
                                </div>
                        </div>';
              	
               
              	
              	

                  echo'<div id="'.$i.'" class="modal fade" role="dialog">';
                      echo'<div class="modal-dialog">';

                             
                               echo'<div class="modal-content">';
                                 echo'<div class="modal-header">';
                                   echo'<button type="button" class="close" data-dismiss="modal" >×</button>';
                                   echo'<h4 class="modal-title">Plan an interview with '.$info['Given Name'].' </h4>';
                                 echo'</div>';
                                 echo'<div class="modal-body">';
                                 echo'<form method="post" action="../controller/plan_interview.php">';
                                  echo' <div class="row">
                                          <div class="col-md-6">
                                            <h5>Date 1</h5><input type="date" placeholder="Date" name="dating" class="cusform " required>
                                          </div>
                                          <div class="col-md-6">
                                            <h5>Time 1</h5><input type="time" placeholder="Time" name="timing" class="cusform" required>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <h5>Date 2</h5><input type="date" placeholder="Date" name="datin" class="cusform" required>
                                          </div>
                                          <div class="col-md-6">
                                            <h5>Time 2</h5><input type="time" placeholder="Time" name="timin" class="cusform" required>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <h5>Date 3</h5><input type="date" placeholder="Date" name="dati" class="cusform" required>
                                            </div>
                                          <div class="col-md-6">
                                            <h5>Time 3</h5><input type="time" placeholder="Time" name="timi" class="cusform" required>
                                          </div>
                                        </div>
                                        <input type="hidden" name="appname" value="'.$applicant['StuUsrName'].'">
                                        <input type="hidden" name="internshipID" value="'.$internshipID.'">
                                  </div>
                                 <div class="modal-footer">';
                                   echo'<button type="submit" class="sub" >Send request</button>';
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
         
                
                
                echo '<h4><b>0 applicants</b></h4>';
                
               
       
      }



?>