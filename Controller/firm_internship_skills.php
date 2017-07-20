<?php 
 
        
        $skills=get_internship_skills($internshipID);
        $i=1;

        foreach($skills as $skill)
        {
        		
          $skillID=$skill['SkillID'];
          
          $skillname=get_skill_name($skillID);
          
          	echo'<h4> '.$skillname.'</h4>';
          	
          

 			    $i++;
            
        }



?>