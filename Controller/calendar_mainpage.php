
        <?php 
                               
                                $internships=get_firm_internship($id);
                                $nt=mysqli_num_rows($internships);
                                $y=1;
                                if($nt!=0)
                                {
                                  foreach($internships as $internship)
                                  {   
                                       if ($y == 1) 
                                        { 
                                          echo '<br>';
                                          echo '<div class="row">';
                                        }
                                        

                                      $num=get_number_applicants($internship['InternshipID']);
                                      echo'<div class="col-sm-6 col-md-4">
                                            <a href="firm_calendar_internship.php?ID='.$internship['InternshipID'].'" >
                                            <div class="bbox">
                                              <h2><i class="fa fa-calendar"></i>    '.$internship['JobTitle'].'</h3>
                                              <h5><i><center>Number of applicants :<b> '.$num.'</center></i></b></h5>
                                              <h5><i><center>Starting Date :<b> '.$internship['DurationStart'].'</center></i></b></h5>
                                            </div>
                                            </a>
                                          </div>';

                                        if ($y == 3) 
                                        {
                                          echo "</div>";
                                          $y=1;

                                        }
                                        else
                                        {
                                          $y++;
                                        }
                                  
                                  }
                               
                                }
                                else
                                {
                                  echo'<div class="col-md-12">
                                    <center><h3><b> "You do not have any internship"</b></h3></center>
                                  </div>';
                                }  

?>