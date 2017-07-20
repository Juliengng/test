<?php 
 
        
        $persoskills=get_internship_persoskills($internshipID);
        $i=1;

        foreach($persoskills as $persoskill)
        {
        		
          $persoskillID=$persoskill['PersonalSkillID'];
          
          $persoskill=get_persoskill_name($persoskillID);
          
          	echo'<h4>'.$persoskill.'</h4>';
          	
        
 			$i++;
            
        }



?>