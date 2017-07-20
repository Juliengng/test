<?php 
 
        
        $infos=get_internship_info($internshipID);
        
       
        foreach($infos as $info)
        {
        	if($info['Language']!= "Language 1" && $info['LanguageLevel']!= "Level" )
          {	
          $language1=$info['Language'];
          $level1=$info['LanguageLevel'];
          echo'<div class="line">';
          echo'<h4"><b> Language :</b> '.$language1.' -<b> Level :</b> '.$level1.' </h4>
          </div>';
          }
          if($info['Language2']!= "Language 2" && $info['Language2Level']!= "Level" )
          { 
          $language2=$info['Language2'];
          $level2=$info['Language2Level'];
          echo'<div class="line">';
          echo'<h4"><b> Language :</b> '.$language2.' -<b> Level :</b> '.$level2.' </h4>
          </div>';
          }
          if($info['Language3']!= "Language 3" && $info['Language3Level']!= "Level" )
          { 
          $language3=$info['Language3'];
          $level3=$info['Language3Level'];
          echo'<div class="line">';
          echo'<h4"><b> Language :</b> '.$language3.' -<b> Level :</b> '.$level3.' </h4>
          </div>';
          }

          	
          	
        
        }



?>