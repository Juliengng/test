<?php 
 // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
       
        $accepted = get_accepted_applicants($internshipID);

        foreach($accepted as $accep)
        {
        		$stuinfo = get_student_info($accep['StuUsrName']);
						      
              
                foreach ($stuinfo as $info)
                {	
                	echo' <div class="line">
                                <div class="row">
                                <div class="col-md-2">
                                       <img src="assets/profilepics/'.$info['stu_profile_pic'].'" width="80" height="80" class="circle responsive" alt="Profile picture">
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
                                      <button type="button" class=" btn-sm sub b" data-toggle="modal" data-target="#'.$i.'">Plan</button>
                                    </div>
                                </div>
                        </div>';
                           
                               	 echo'<div class="col-sm-6 col-md-6">';
                                    echo'<div class="thumbnail hoverbg">';
                                      echo'<img src="assets/profilepics/'.$info['stu_profile_pic'].'" width="80" height="80" class="circle responsive" alt="Profile picture">';
                                      echo'<div class="caption">';
                                        echo'<h3>'.$info['Given Name'].' </h3>';
                                        
                                        echo'<p><a href="student_informations.php?usrname='.$accep['StuUsrName'].'&amp;intern='.$internshipID.'" target="_blank" class="btn btn-default add_intern" role="button" >Infos</a>';
                                        //echo '<button type="button" class="btn add_intern" data-toggle="modal" data-target="#'.$y.'">Infos</button>';
                                      echo'</div>';
                                    echo'</div>';
                                  echo'</div>';


                }
              


          
            
        }



?>