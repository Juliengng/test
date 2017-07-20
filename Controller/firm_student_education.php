<?php 
 
        
       $infos=get_student_info($usrname);

        foreach($infos as $info)
        {
        		
        //echo'<img src="assets/profilepics/'.$info['stu_profile_pic'].'" width="230" height="210" class="circle" alt="Profile picture">';	
        
          echo'<table class="customtable ">';
          		echo'<tr>';
          			echo'<th><h3>Education</h3></th>';
          			echo'<th><span></span></th>';
          		echo'</tr>';
          		echo'<tr>';
          			echo'<td><b>Study Field</b></td>';
          			echo'<td>'.$info['StudyField'].'</td>';
          		echo'</tr>';
          		echo'<tr>';
          			echo'<td><b>Major</b></td>';
          			echo'<td>'.$info['Major'].'</td>';
          		echo'</tr>';
          		echo'<tr>';
          			echo'<td><b>University Name</b></td>';
          			echo'<td>'.$info['UniversityName'].'</td>';
          		echo'</tr>';
          		echo'<tr>';
          			echo'<td><b>GPA</b></td>';
          			echo'<td>'.$info['GPA'].'</td>';
          		echo'</tr>';
          		
          echo'</table>';


                                    

         
            
        }



?>