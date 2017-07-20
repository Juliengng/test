<?php 
 // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
       
        $accepted = get_accepted_applicants($internshipID);
        $nz=mysqli_num_rows($accepted); 
        $d=1000;
        if($nz!=0)
        {
          foreach($accepted as $accep)
          {
          		$stuinfo = get_student_info($accep['StuUsrName']);
  						      
                
                  foreach ($stuinfo as $info)
                  {	
                  	echo' <div class="line">
                                <div class="row">
                                  <div class="col-md-4">
                                        <img src="assets/profilepics/'.$info['stu_profile_pic'].'" width="60" height="60" class="circle responsive" alt="Profile picture">
                                         
                                      </div>
                                      <div class="col-md-4">
                                          <h4><b>'.$info['Given Name'].'</b></h4> 
                                      </div>
                                      <div class="col-md-4">
                                       <button type="button" class="sub c" data-toggle="modal" data-target="#'.$d.'">Information and skills</button>
                                       <form action="../controller/cancel_accept.php" method="post">
                                        <input type="hidden" name="id" value="'.$info['StuUsrName'].'">
                                        <input type="hidden" name="internshipid" value="'.$internshipID.'">
                                       <button type="submit" name="canc" class="minidel" >X</button>
                                        </form>
                                      </div>
                                  </div>
                          </div>';
                             
                                 	

                          echo'<div id="'.$d.'" class="modal fade" role="dialog">';
                            echo'<div class="modal-dialog">';

                             
                               echo'<div class="modal-content">';
                                 echo'<div class="modal-header">';
                                   echo'<button type="button" class="close" data-dismiss="modal" >×</button>';
                                   echo'<h4 class="modal-title">'.$info['Given Name'].'\'s information </h4>';
                                 echo'</div>';
                                 echo'<div class="modal-body">
                                    <h2 class="title firm">
                                    Education
                                    </h2>
                                    <div class="containera firm">
                                     <div class="row">
                                      <div class="col-md-6">';
                                         include("../controller/firm_studentphoto.php");
                                      echo'</div>
                                      <div class="col-md-6">
                                        <h4><b>Surname</b>:'.$info['Given Name'].'</h4>
                                        <h4><b>Study Field</b>:'.$info['StudyField'].'</h4>
                                        <h4><b>Major</b>:'.$info['Major'].'</h4>
                                        <h4><b>University Name</b>:'.$info['UniversityName'].'</h4>
                                        <h4><b>GPA</b>:'.$info['GPA'].'</h4>
                                        <h4><b>Work Experience</b>:'.$info['WorkExperience'].'</h4>
                                      </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <h2 class="title firm">
                                        Personal skills
                                        </h2>
                                        <div class="containera firm">';
                                             include("../controller/firm_student_persoskills.php");
                                        echo'</div>
                                      </div>
                                      <div class="col-md-6">
                                        <h2 class="title firm b">
                                        Practicall skills
                                        </h2>
                                        <div class="containera firm b">';
                                              include("../controller/firm_student_skills.php");
                                        echo'</div>
                                      </div>
                                    </div> 
                                  </div>
                                  
                                   
                                 <div class="modal-footer">
                                   
                                 </div>
                                 
                               </div>

                            </div>
                           </div>';
                 $d++;
              }  
          }
        }
        else
      {
         
                echo '<h4><b>0 accepted</b></h4>';

      }

       

?>