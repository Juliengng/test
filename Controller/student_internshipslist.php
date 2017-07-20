<?php 
  
  
	require('../database/mysql_connect.inc.php'); 

  $counter=0;
  
		$rows=internship_list($id);
		foreach($rows as $row){
			$isamba=isamba($row['PostedBy']);
			$postedpic=get_posterpic($row['PostedBy']);
			$postedname=get_postername($row['PostedBy']);
		echo '<tr>';
		echo '<td>'.$row['JobTitle'].'</td>';
		echo '<td><i class="fa fa-map-marker " aria-hidden="true"></i> '.$row['Location'].'</b></td>';
		echo '<td width="9%">'.$row['Language'].'</td>';
		echo '<td width="17%"><i class="fa fa-hourglass-half " aria-hidden="true"></i> '.$row['Duration'].'</b></td>';
		$row['DurationStart'] = date("d/m/Y", strtotime($row['DurationStart']));
		$row['ApplicationDeadline'] = date("d/m/Y", strtotime($row['ApplicationDeadline']));
		echo '<td><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;'.$row['DurationStart'].'</b><br><br><i class="fa fa-calendar-times-o" aria-hidden="true"></i><font color="red">'.$row['ApplicationDeadline'].'</font></b></td>';
		echo '<td  style="width:300px;"><img class="img-circle"src="assets/profilepics/'.$postedpic['ProfilePic'].'" width="30" height="30" alt="user">&nbsp;&nbsp;&nbsp;&nbsp; '.$postedname.' <br> Tips: '.$row['Tips'].' €<br><a href="#" data-toggle="modal" data-target="#amba_profile'.$counter.'">Wanna have fun in '.$row['Location'].'?</b></a></td>';
		echo '</tr>';
		echo'   <!-- Modal -->
    <div id="amba_profile'.$counter.'" class="modal fade" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document" width="80%">

            <!-- Modal content-->
            <div class="modal-content" width="50%">
                <div class="modal-header login-header" width="50%">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Description</h4>
                </div>
                <div class="modal-body">
                    
                       <div class="container">
                                <h2>'.$row['JobTitle'].'</h2>

                                <div class="col-md-1" style="width:10%">
                               <h4><strong class="search-result row">Location</strong></h6>
                                
                                <h4>'.$row['Location'].'</h6> 
                                <br>                                
                                </div>
								<div class="col-md-1" style="width:10%">
                               <h4><strong class="search-result row">Language</strong></h6>
                                
                                <h4>'.$row['Language'].'</h6> 
                                <br>                                
                                </div>
								<div class="col-md-1" style="width:9%">
                               <h4><strong class="search-result row">Duration</strong></h6>
                                
                                <h4>'.$row['Duration'].'</h6> 
                                <br>                                
                                </div>
								<div class="col-md-1" style="width:6%">
                               <h4><strong class="search-result row">Tips</strong></h6>
                                
                                <h4>'.$row['Tips'].' €</h6> 
                                <br>                                
                                </div>
								<div class="col-md-1" style="width:18%">
                               <h4><strong class="search-result row">Living Cost/month</strong></h6>
                                
                                <h4>'.$row['LivingCost'].' €</h6> 
                                <br>                                
                                </div>

                            <section class="col-xs-12 col-sm-6 col-md-12">
                                <article class="search-result row">
                                    <div class="col-xs-4 col-sm-6 col-md-3">
                                        <a href="#" title="Lorem ipsum" class="thumbnail"><img width="160" height="160" src="assets/profilepics/'.$postedpic['ProfilePic'].'" alt="Lorem ipsum" /></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <ul >
                                            <li><span>Name : '.$postedname.'</span></li>';
											if($isamba==1){
										echo '<li><span>Position at company : '.$postedpic['Occupation'].'</span></li>
											  <li><span>Company : '.$postedpic['company'].'</span></li>
											   <li><span>Degree : '.$postedpic['degree'].'</span></li>';
		}

                                echo   '</ul>
                                    </div>
                                    
                                  
                                </article>

                                <article class="search-result row">
                              <div class="col-xs-12 col-sm-12 col-md-5 excerpet">
                                        <h3><a href="#" title="">Internship Description</a></h3><p>'.nl2br($row['Description']).'             </p> 
                                        
                                    </div> 
                              </article> ';
                            if($row['LanguageLevel']== "Beginner")
							{
								$languagelevel = 25;
								$progressbar='progress-bar-success';
								
							}
							 if($row['LanguageLevel']== "Intermediate")
							{
								$languagelevel = 50;
								$progressbar='progress-bar-info';
							}
							 if($row['LanguageLevel']== "Advanced")
							{
								$languagelevel = 75;
								$progressbar='progress-bar-warning';
							}
							 if($row['LanguageLevel']== "Fluent")
							{
								$languagelevel = 100;
								$progressbar='progress-bar-danger';
							}
						echo '<article class="search-result row">
                              <div class="col-xs-12 col-sm-12 col-md-5 excerpet">
                                        <h3><a href="#" title="">Skills requirement</a></h3>
                                    <p>'.$row['Language'].'</p>
                                    <div class="progress">
                                    <div class="progress-bar '.$progressbar.' progress-bar-striped" role="progressbar" aria-valuenow="'.$languagelevel.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$languagelevel.'%">
                                    '.$row['LanguageLevel'].'
                                    </div></div>';
									 if($row['Language2']!= "Language 2")
							{
								$languagelevel2=0;
								$progressbar2='';
											 if($row['Language2Level']== "Beginner")
							{
								$languagelevel2 = 25;
								$progressbar2='progress-bar-success';
								
							}
							 if($row['Language2Level']== "Intermediate")
							{
								$languagelevel2 = 50;
								$progressbar2='progress-bar-info';
							}
							 if($row['Language2Level']== "Advanced")
							{
								$languagelevel2 = 75;
								$progressbar2='progress-bar-warning';
							}
							 if($row['Language2Level']== "Fluent")
							{
								$languagelevel2 = 100;
								$progressbar2='progress-bar-danger';
							}
								echo '<p>'.$row['Language2'].'</p>
                                    <div class="progress">
                                    <div class="progress-bar '.$progressbar2.' progress-bar-striped" role="progressbar" aria-valuenow="'.$languagelevel2.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$languagelevel2.'%">
                                    '.$row['Language2Level'].'
                                    </div></div>';
							
							
							
							}
                                 if($row['Language3']!= "Language 3")
							{
								$languagelevel3=0;
								$progressbar3='';
											 if($row['Language3Level']== "Beginner")
							{
								$languagelevel3 = 25;
								$progressbar3='progress-bar-success';
								
							}
							 if($row['Language3Level']== "Intermediate")
							{
								$languagelevel3 = 50;
								$progressbar3='progress-bar-info';
							}
							 if($row['Language3Level']== "Advanced")
							{
								$languagelevel3 = 75;
								$progressbar3='progress-bar-warning';
							}
							 if($row['Language3Level']== "Fluent")
							{
								$languagelevel3 = 100;
								$progressbar3='progress-bar-danger';
							}
								echo '<p>'.$row['Language3'].'</p>
                                    <div class="progress">
                                    <div class="progress-bar '.$progressbar3.' progress-bar-striped" role="progressbar" aria-valuenow="'.$languagelevel3.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$languagelevel3.'%">
                                    '.$row['Language3Level'].'
                                    </div></div>';
							
							
							
							}
							 
						
							
                                 echo   '</div> 
                              </article>
              </section>
                        </div> ';
						echo'	 <form  method="post" action="" autocomplete="off">';
                       	 $i = 1;
                              $skills=get_skills_student($row['JobCategory']);
							  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please choose your 5 best practical skills to apply<br><br>';
                              foreach ($skills as $skill) {
                                
                            echo ' <div class="col-md-4">
                                  <input type="checkbox" style="width:10%;" id="skill" name="Skills[]" value="'.$skill["SkillsID"].'">&nbsp'.$skill["SkillLabel"].'</input></div>';
                            
                                  if ($i%3 == 0) 
                                  {
                                    echo '<br><br>';
                                  }
                                  $i++;
                              }
                    
					 echo '<br><br>';
					   	
						$j = 1;
                              $personalskills=get_personalskills_student($row['JobCategory']);
							  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please choose your 5 best personal skills to apply<br><br>';
                              foreach ($personalskills as $personalskill) {
                                
                            echo ' <div class="col-md-4">
                                  <input type="checkbox" style="width:10%;" id="skill" name="PersonalSkills[]" value="'.$personalskill["PersonalSkillID"].'">&nbsp'.$personalskill["PersonalSkillLabel"].'</input></div>';
                            
                                  if ($j%3 == 0) 
                                  {
                                    echo '<br><br>';
                                  }
                                  $j++;
                              }
							   echo '<br><br>';
               echo ' <div class="modal-footer">';
				
					 
					 
							  
                    echo '<button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="submit" name="apply" value="'.$row['InternshipID'].'" class="add-project" onclick="onFunction()">Apply</button>
					
                </div>
				</form>
            </div>

        </div>
    </div>';
	
	if(isset($_POST['apply'])){
		$internshipid=$_POST['apply'];
		insert_internship($internshipid,$id);
		   if(!empty($_POST['Skills'])) {
			   if(!empty($_POST['PersonalSkills'])) {
 		   $skills= $_POST['Skills'];
                    $persoskills= $_POST['PersonalSkills'];

                    foreach($skills as $skill)
                    {
                        add_skills_student($id,$internshipid,$skill);

                    }

                    foreach($persoskills as $persoskill)
                    {
                        add_personalskills_student($id,$internshipid,$persoskill);

                    }
		   }	

		   }
		  }	
	
		$counter=$counter+1;
		
	}
	
?>