<?php 
 
         $usrname =$accep['StuUsrName'];
        $skills=get_student_skills($usrname,$internshipID);
        $i=1;

        foreach($skills as $skill)
        {
        		
          $skillID=$skill['SkillID'];
          
          $skillname=get_skill_name($skillID);
          
          	echo'<h4>'.$skillname.'</h4>';
          	
      

 			    $i++;
            
        }



?>