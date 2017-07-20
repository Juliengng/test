<?php
            include("mysql_connect.inc.php");

            if(($_POST['JobCategory'])!= 'Internship'&&($_POST['JobCategory'])!= '' || ($_POST['Location'])!= 'Location'&&($_POST['Location'])!= '' || ($_POST['Language'])!= 'Language'&&($_POST['Language'])!= '' )
            {
            
            $sql = "SELECT * FROM `internship` WHERE 1";


            if(($_POST['JobCategory'])!= 'Internship'&&($_POST['JobCategory'])!= '')
            {
              $JobCategory = $_POST['JobCategory'];
              $sql .= " AND `JobCategory` = '$JobCategory'";
            }
            if(($_POST['Location'])!= 'Location'&&($_POST['Location'])!= '')
            {
              $Location = $_POST['Location'];
              $sql .= " AND  `Location` = '$Location'";
            }

            if(($_POST['Language'])!= 'Language'&&($_POST['Language'])!= '')
            {
              $Language = $_POST['Language'];
              $sql .= " AND `Language` = '$Language'";
            }
            /*if(($_POST['Duration'])!= 'Duration'&&($_POST['Duration'])!= '')
            {
              $Duration = $_POST['Duration'];
              $sql .= " AND '$Duration'";
            }
            $sql .= " ORDER BY DurationStart DESC";*/

            $result = mysqli_query($link, $sql);
            echo  mysqli_error($link);
            foreach ($result as $res)
            {
            
              echo' <div class="row">
                        <h2 class="title">
                            '.$res['JobTitle'].'
                        </h2>
                        <div class="containera add">
                            <div class="row">
                              <div class= col-md-6>
                                  <h4><b>Company name:</b>'.$res['FirmUsrName'].' </h4>
                                  <h4><b>Supervisor name:</b>'.$res['Supervisor'].' </h4>
                                  <h4><b>Number of intern:</b>'.$res['Quota'].' </h4>
                                  <h4><b>Starting date:</b>'.$res['DurationStart'].' </h4>
                              </div>
                              <div class= col-md-6>

                            </div>
                        </div>
                    </div>';
            }

          }
          else
          { 
            header("location:../View/index.php");

          }
            
       
?>