<?php 
 
        
       $infos=get_student_info($usrname);

        foreach($infos as $info)
        {
        		

          echo'<table class="customtable">';
          	echo'<tr>';
          		echo'<th><h3> Work Experience</h3></th>';
          		echo'<th><span></span></th>';
          	echo'</tr>';
          	 echo'<tr>';
                echo'<td><b>Work Experience</b></td>';
                echo'<td>'.$info['WorkExperience'].'</td>';
              echo'<tr>';
          echo'</table>';


                                    

         
            
        }



?>