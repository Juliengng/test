<?php
session_start();
include("mysql_connect.inc.php");

if (isset($_SESSION['username']))
{
//select sql for check username and password

  $id = $_SESSION['username'] ;
  $role = $_SESSION['role'];
}

//for drop down menu in searching

$sql = "
SELECT
`JobCategory`
FROM
`internship`
GROUP BY  `JobCategory`
";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_row($result))
{
  $arrayJobCategory[]=$row[0];
}
$sql = "
SELECT
`Language`
FROM
`internship`
GROUP BY `Language`
";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_row($result))
{
  $arrayLanguage[]=$row[0];
}
$sql = "
SELECT
`Location`
FROM
`internship`
GROUP BY  `Location`
";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_row($result))
{
  $arrayLocation[]=$row[0];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Search Internship</title>
  <!-- Bootstrap Core CSS -->
  <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
  <link href="assets/css/add_internship.css" rel="stylesheet" type="text/css">
</head>
<body class="header-nightsky intern">
  <div >
    <!-- Navigation -->
    <?php require("components/navbar.php");?>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">

          <h1>Search Internship
          </h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Search Intern</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="container">

         <!-- <form method="post" action="">
            <p> <span class="custom-dropdown">
    
			     <select id="JobCategory" name="JobCategory" title="Internship"><br>
                     <option data-hidden="true">Job Category</option>
   
                <?php
                foreach($arrayJobCategory as $category){
                  ?><option><?php echo "$category";?></option><?php
                }
                ?>

              </select>
            </span></p>
            <p> <span class="custom-dropdown">
             <select id="Location" name="Location" title="Location"><br>
			  <option data-hidden="true">Location</option>
                <?php
                foreach($arrayLocation as $elementslocation){
                  ?><option><?php echo "$elementslocation";?></option><?php
                }
                ?>

              </select>
            </span> </p>
            <p> <span class="custom-dropdown">
            <select id="Language" name="Language" title="Language"><br>
			 <option data-hidden="true">Language</option>
                <?php
                foreach($arrayLanguage as $elementslanguage){
                  ?><option><?php echo "$elementslanguage";?></option><?php
                }
                ?>

              </select>
            </span> </p>
            <p> <span class="custom-dropdown">
               <select id="Duration" name="Duration" title="Duration"><br>
			    <option data-hidden="true">Duration</option>
                <option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
                <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
                <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
              </select>
            </span> </p>
            <input type="submit" name="search" value="search" href="#" class="btn btn-primary">-->
            <div class="hero">
            <form method="post" action="SearchIntern.php" id="searchInternship">
                <div>
                    <span class="sr-only">Job Category1</span>
                    <select name="JobCategory" title="Internship" class="selectpicker" id="zebi">

                        <?php
                        foreach($arrayJobCategory as $category){
                            ?><option><?php echo "$category";?></option><?php
                        }
                        ?>
                    </select>
                    <select  name="Location" title="Location" class="selectpicker" id="zebi">

                        <?php
                        foreach($arrayLocation as $elementslocation){
                            ?><option><?php echo "$elementslocation";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Language" title="Language" class="selectpicker" id="zebi">
                        <?php
                        foreach($arrayLanguage as $elementslanguage){
                            ?><option><?php echo "$elementslanguage";?></option><?php
                        }
                        ?>
                    </select>
                    <select name="Duration" title="Duration" class="selectpicker" id="zebi">
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`)<90">within 3 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 120 AND 150">4-5 months</option>
                        <option value="DATEDIFF(`DurationEnd`,`DurationStart`) BETWEEN 180 AND 365">6-12 months</option>
                    </select>
                </div>

                &nbsp 
        <input type="submit" name="search" value="Search " href="#" class="button-mdn">
        </form>
        </div>
            
         
          <!--<hr width="100%">
          <div class="col-md-24 col-sm-24">
            <?php

            if(!($row = mysqli_fetch_row($result)))	{
				echo $sql;
              echo "'No such internship, please choose another requirement.'";
            }else
            {
				echo mysqli_num_rows($result);
		$rows=array();
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
   $rows[] = $row;

	foreach($rows as $row){
	echo $row['JobCategory'];
	}
              }
              ?>-->

              <?php
          

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
            
              
                       echo' <h2 class="title intern">
                            '.$res['JobTitle'].'
                            </h2>
                        <div class="containera add intern">
                            <div class="row">
                              <div class= col-md-4>
                                  <h4><b>Company name:</b>'.$res['FirmUsrName'].' </h4>
                                  <h4><b>Supervisor name:</b>'.$res['Supervisor'].' </h4>
                                  <h4><b>Number of intern:</b>'.$res['Quota'].' </h4>
                                  <h4><b>Starting date:</b>'.$res['DurationStart'].' </h4>
                              </div>
                              <div class= col-md-4>
                                <br>
                                <h4><b>Location:</b>'.$res['Location'].' </h4>
                                <h4><b>Salary:</b>'.$res['Salary'].' </h4>
                              </div>
                              <div class= col-md-4>
                                <br>
                                <a href="login.php" class="apply">Apply</a>
                              </div>
                            </div>
                        </div>
                        <br>';
                    
            }

          }
          
            
       
?>

<!--
<div class="panel panel-default">
<div class="panel-heading">
<h4>Job Title</h4>
</div>
<div class="panel-body">
<h4>Job Details</h4>
<a href="#" class="btn btn-primary">Apply</a> </div>
</div>
-->
</div>
<!-- Pager -->

<!-- Footer -->
</div>
  <?php
        require("components/contact.php");
        require("components/footer.php");
      ?>

<!-- /.container -->
<!-- jQuery -->
<script src="assets/libs/jquery/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/libs/bootstrap/bootstrap.min.js"></script>
</body>
</html>
