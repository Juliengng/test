<?php 
require('../controller/model.php');
require('../controller/firm_loggedin.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Post an internship</title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara|Josefin+Slab:700|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

   
   

   
   
    <link href="assets/css/style6.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/add_internship.css" rel="stylesheet">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="assets/img/logf.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="assets/img/logf.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="firm_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DashBoard</span></a></li>
                        <li  class="active"><a href="add_internship.php"><i class="fa fa-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Internship</span></a></li>
                        
                        <li><a href="firm_calendar.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
                        <li><a href="firm_settings.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Settings</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                           
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/profilepics/<?php echo $firmPP; ?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $id ?></span>
                                                    <p class="text-muted small">
                                                        
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="firm_settings.php" class="view btn-sm active" style="color:white">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <form method="post" action="../controller/add_internship.php" >
                    <h2><b> My company: <?php echo $firmname ?></b></h2><br>
                        <h2 class="title">
                            Your internship
                        </h2>
                        <div class="containera add">
                            <h4><b>Internship Title*</b></h4>
                            <input type="text" name="name" class="cusform">
                            
                            <div class="line">
                                <h4><b>Supervisor name*</b></h4>
                                <input type="text" name="sup" class="cusform">
                            </div>
                            <div class="line">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4><b>Number of intern*</b></h4>
                                        <input type="number" name="number" class="cusform grand">
                                    </div>
                                    <div class="col-md-4 ">
                                        <h4><b>Application Deadline</b>     <i class="glyphicon glyphicon-paste"></i></h4>
                                        <input type="date" placeholder="Application Deadline" name="deadline" class="cusform grand">
                                    </div>
                                </div>                               
                            </div>
                            <div class="line">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4><b>Internship starting date</b>      <i class="glyphicon glyphicon-calendar"></i></h4>
                                        <input type="date" placeholder="Sarting Date" name="startdate" class="cusform grand">
                                    </div>
                                    <div class="col-md-4 ">
                                        <h4><b>Minimum duration</b>      <i class="glyphicon glyphicon-hourglass"></i></h4>
                                        <input type="text"  name="duration" class="cusform grand">
                                    </div>
                                </div>                                
                            </div>
                            <div class="line">
                                        <h4><b>Allowance*</b></h4>
                                        <input type="text"  name="price" class="cusform ">
                                    

                                        <select id="money" name="money" title="money" class="cusform petit selectpicker"><br>
                                                <option data-hidden="true">Choose a currency</option>
                                                <option data-hidden="true">Euros €</option>
                                                <option data-hidden="true">Dollars $</option>
                                                <option data-hidden="true">Livre Sterling £</option>
                                        </select>                             
                            </div>
                        </div>
                        <br>

                        <h2 class="title">
                            Location
                        </h2>
                        <div class="containera add">
                            <div class="line">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><b>City / Country*</b></h4>
                                        <input type="text"  name="city" class="cusform grand">
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b>Postal code*</b></h4>
                                        <input type="textarea"  class="cusform grand">
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <h4><b>Mailing adress*</b></h4>
                                <textarea type="text"  class="cusform grand"></textarea>
                            </div>
                           
                        </div>
                        <br>
                        <h2 class="title">
                            Informations
                        </h2>
                        <div class="containera add">
                            <div class="line">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><b>Choose a category*</b></h4>
                                        <select id="jobcategory1" name="jobcategory1" title="Internship" class="cusform selectpicker"><br>
                                                    <option data-hidden="true">Choose a category</option>
                                                    <option data-hidden="true">Saisonnier</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><b>Choose a Subcategory*</b></h4>
                                        <select id="jobcategory" name="jobcategory" title="Internship" class="cusform selectpicker"><br>
                                            <option data-hidden="true">Job Category</option>
                                        <?php
                                        
                                        $arrayJobCategory=get_jobcategory();

                                        foreach($arrayJobCategory as $category){
                                            ?><option value="<?php echo "$category";?>"><?php echo "$category";?></option><?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <h4><b>Internship Description</b></h4>
                                <textarea  name="description" class="cusform"></textarea>
                            </div>
                            <div class="line">
                                <h4><b>Living Cost per month (food/rent*/transport)</b></h4>
                                <input type="text"  name="living" class="cusform">
                            </div>   
                        </div>

                        <br>
                        <h2 class="title">
                            Required skills
                        </h2>
                        <div class="containera add">
                            <div class="line">
                                <h4><b>Language*</b></h4>
                                    <select name="language" title="Language" class="cusform selectpicker"></h4>
                                        <option data-hidden="true">Language 1</option>
                                        <?php
                                        
                                        $arraylanguages=get_language();

                                        foreach($arraylanguages as $language){
                                            ?><option><?php echo "$language";?></option><?php
                                        }
                                        ?>
                                    </select>
                                   
                                            
                                    <select name="languagelevel" title="LanguageLevel" class="cusform petit selectpicker"><br>
                                            <option data-hidden="true">Level</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                            <option value="Fluent">Fluent</option>
                                    </select>
                            </div>

                            <div class="line">
                                <h4><b>Language(optional)</b></h4>   
                                <select name="language2" title="Language2" class="cusform selectpicker"><br>
                                                <option data-hidden="true">Language 2</option>
                                                <?php
                                                
                                                $arraylanguages=get_language();

                                                foreach($arraylanguages as $language){
                                                    ?><option><?php echo "$language";?></option><?php
                                                }
                                                ?>
                                </select>
                                <select name="languagelevel2" title="LanguageLevel2" class="cusform petit selectpicker"><br>
                                          <option data-hidden="true">Level</option>
                                          <option value="Beginner">Beginner</option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                          <option value="Fluent">Fluent</option>
                                </select>
                            </div>
                            <div class="line">
                                <h4><b>Language(optional)</b></h4>
                                <select name="language3" title="Language3" class="cusform selectpicker"><br>
                                          <option data-hidden="true">Language 3</option>
                                          <?php
                                        
                                          $arraylanguages=get_language();

                                          foreach($arraylanguages as $language)
                                          {
                                            ?><option><?php echo "$language";?></option><?php
                                          }
                                          ?>
                                        </select>
                                <select name="languagelevel3" title="LanguageLevel3" class="cusform petit selectpicker"><br>
                                          <option data-hidden="true">Level</option>
                                          <option value="Beginner">Beginner</option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                          <option value="Fluent">Fluent</option>
                                </select>
                            </div>                          
                        </div>
                        <br>

                      <!--<form method="post" action="../Controller/add_internship.php" >
                        <div class="container1">
                        <div class="container1">
                        <table class="responstable spe">
                            <tr>
                                <th><span>Your internship</span></th>
                                <th><span></span></th>
                            </tr>

                            <tr>
                                <td><h4>Internship Title</h4></td>
                                <td><input type="text" placeholder="Internship Title" name="name" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Supervisor name</h4></td>
                                <td><input type="text" placeholder="supervisor name" name="sup" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Number of intern</h4></td>
                                <td><input type="number" placeholder="Number of intern" name="number" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Application Deadline</h4></td>
                                <td><input type="date" placeholder="Application Deadline" name="deadline" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Internship starting date</h4></td>
                                <td><input type="date" placeholder="Sarting Date" name="startdate" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Minimum duration</h4></td>
                                <td><input type="text" placeholder="Duration" name="duration" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Allowance</h4></td>
                                <td><input type="text" placeholder="Price /month" name="price" class="add_intern">
                                <select id="money" name="money" title="money" class="add_intern selectpicker"><br>
										<option data-hidden="true">Choose a currency</option>
										<option data-hidden="true">Euros €</option>
										<option data-hidden="true">Dollars $</option>
										<option data-hidden="true">Livre Sterling £</option>
								</select>
								</td>
                            </tr>
                            <tr>
                                <td><h4>City / Country</h4></td>
                                <td><input type="text" placeholder="City / Country" name="city" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Language 1</h4></td>
                                <td><select name="language" title="Language" class="add_intern selectpicker"></h4>
                                    <option data-hidden="true">Language 1</option>
                                    <?php
                                    
                                    $arraylanguages=get_language();

                                    foreach($arraylanguages as $language){
                                        ?><option><?php echo "$language";?></option><?php
                                    }
                                    ?>
                                    </select>
                               
                                        
                                    <select name="languagelevel" title="LanguageLevel" class="add_intern selectpicker"><br>
                                        <option data-hidden="true">Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Fluent">Fluent</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td><h4>Language 2</h4></td>    
                                    <td><select name="language2" title="Language2" class="add_intern selectpicker"><br>
                                                <option data-hidden="true">Language 2</option>
                                                <?php
                                                
                                                $arraylanguages=get_language();

                                                foreach($arraylanguages as $language){
                                                    ?><option><?php echo "$language";?></option><?php
                                                }
                                                ?>
                                        </select>
                                      
                                
                                    
                                    <select name="languagelevel2" title="LanguageLevel2" class="add_intern selectpicker"><br>
                                          <option data-hidden="true">Level</option>
                                          <option value="Beginner">Beginner</option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                          <option value="Fluent">Fluent</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><h4>Language 3</h4></td>
                                    <td>
                                        <select name="language3" title="Language3" class="add_intern selectpicker"><br>
                                          <option data-hidden="true">Language 3</option>
                                          <?php
                                        
                                          $arraylanguages=get_language();

                                          foreach($arraylanguages as $language)
                                          {
                                            ?><option><?php echo "$language";?></option><?php
                                          }
                                          ?>
                                        </select>
                                    
                                
                                   
                                        <select name="languagelevel3" title="LanguageLevel3" class="add_intern selectpicker"><br>
                                          <option data-hidden="true">Level</option>
                                          <option value="Beginner">Beginner</option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced</option>
                                          <option value="Fluent">Fluent</option>
                                        </select></td>
                                </tr>
                            <tr>
                                <td><h4>Living Cost per month (food/rent*/transport)</h4></td>
                                <td><input type="text" placeholder="Living Cost" name="living" class="add_intern"></td>
                            </tr>
                            <tr>
                                <td><h4>Internship Description</h4></td>
                                <td><textarea placeholder="Description" name="description" class="add_intern"></textarea></td>
                            </tr>
							<tr>
								<td><h4>Choose a category</h4></td>
								<td><select id="jobcategory1" name="jobcategory1" title="Internship" class="add_intern selectpicker"><br>
										<option data-hidden="true">Choose a category</option>
										<option data-hidden="true">Saisonnier</option>
									</select></td>
							</tr>
                            <tr>
                                <td><h4>Job category</h4></td>
                                <td><select id="jobcategory" name="jobcategory" title="Internship" class="add_intern selectpicker"><br>
                                        <option data-hidden="true">Job Category</option>
                                    <?php
                                    
                                    $arrayJobCategory=get_jobcategory();

                                    foreach($arrayJobCategory as $category){
                                        ?><option value="<?php echo "$category";?>"><?php echo "$category";?></option><?php
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>

                        </table>               
                        </div>
                        </div>-->
        
                        
               <div class="form-group"><bran>
                  <div class="input-group col-sm-8">
                    <div class="container">
                      <div class="Receptionist">
                          <b>Practical skills for receptionist</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
                      </div>
                      <div class="Chef">
                          <b>Practical skills for chef</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
                      </div>
                    <div class="Waiter">
                          <b>Practical skills for waiter</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
                      </div>
                    <div class="Bartender">
                         <b>Practical skills for bartender</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
                      </div>
                  </div>

                    <div class="container">
                        <div class="Receptionist">
                                                <?php
                                                  $i = 1;
                                                  $skills=get_skills_receptionist();
                                                  foreach ($skills as $skill) {
                                                    ?>
                                                    <div class="col-md-4">
                                                      <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillsID"];?>"><?php echo"&nbsp".$skill["SkillLabel"];?>
                                                    </div>
                                                    <?php
                                                      if ($i%3 == 0) 
                                                      {
                                                        echo "<br>";
                                                      }
                                                      $i++;
                                                  }
                                                  ?>
                        </div>
                        <div class="Chef">
                           <?php
                                                  $i = 1;
                                                  $skills=get_skills_chef();
                                                  foreach ($skills as $skill) {
                                                    ?>
                                                    <div class="col-md-4">
                                                      <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillsID"];?>"><?php echo"&nbsp".$skill["SkillLabel"];?>
                                                    </div>
                                                    <?php
                                                      if ($i%3 == 0) 
                                                      {
                                                        echo "<br>";
                                                      }
                                                      $i++;
                                                  }
                                                  ?>
                        </div>
                          <div class="Waiter">
                                                <?php
                                                  $i = 1;
                                                  $skills=get_skills_waiter();
                                                  foreach ($skills as $skill) {
                                                    ?>
                                                    <div class="col-md-4">
                                                      <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillsID"];?>"><?php echo"&nbsp".$skill["SkillLabel"];?>
                                                    </div>
                                                    <?php
                                                      if ($i%3 == 0) 
                                                      {
                                                        echo "<br>";
                                                      }
                                                      $i++;
                                                  }
                                                  ?>
                        </div>
                          <div class="Bartender">
                                                <?php
                                                  $i = 1;
                                                  $skills=get_skills_bartender();
                                                  foreach ($skills as $skill) {
                                                    ?>
                                                    <div class="col-md-4">
                                                      <input type="checkbox" id="skill" name="Skills[]" value="<?php echo $skill["SkillsID"];?>"><?php echo"&nbsp".$skill["SkillLabel"];?>
                                                    </div>
                                                    <?php
                                                      if ($i%3 == 0) 
                                                      {
                                                        echo "<br>";
                                                      }
                                                      $i++;
                                                  }
                                                  ?>
                      </div>
                 </div>
              
                 <div class="form-group">
                  <div class="input-group col-sm-8"><br>
                        <div class="container">
                            <div class="Receptionist">
	                        <b>Personal skills for receptionist</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
	                    	</div>
		                    <div class="Chef">
		                        <b>Personal skills for chef</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
		                    </div>
		                    <div class="Waiter">
		                        <b>Personal skills for waiter</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
		                    </div>
		                    <div class="Bartender">
		                       <b>Personal skills for bartender</b><span style="color:red">  You have to choose 5 skills maximum</span><br><br>
		                </div>
                </div>

                <div class="container">
                    <div class="Receptionist">
                                            <?php
                                              $i = 1;
                                              $skills=get_personalskills_receptionist();
                                              foreach ($skills as $skill) {
                                                ?>
                                                <div class="col-md-4">
                                                  <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $skill["PersonalSkillID"];?>"><?php echo"&nbsp".$skill["PersonalSkillLabel"];?>
                                                </div>
                                                <?php
                                                  if ($i%3 == 0) 
                                                  {
                                                    echo "<br>";
                                                  }
                                                  $i++;
                                              }
                                              ?>
                    </div>
                    <div class="Chef">
                       <?php
                                              $i = 1;
                                              $skills=get_personalskills_chef();
                                              foreach ($skills as $skill) {
                                                ?>
                                                <div class="col-md-4">
                                                  <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $skill["PersonalSkillID"];?>"><?php echo"&nbsp".$skill["PersonalSkillLabel"];?>
                                                </div>
                                                <?php
                                                  if ($i%3 == 0) 
                                                  {
                                                    echo "<br>";
                                                  }
                                                  $i++;
                                              }
                                              ?>
                    </div>
                        <div class="Waiter">
                                            <?php
                                              $i = 1;
                                              $skills=get_personalskills_waiter();
                                              foreach ($skills as $skill) {
                                                ?>
                                                <div class="col-md-4">
                                                  <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $skill["PersonalSkillID"];?>"><?php echo"&nbsp".$skill["PersonalSkillLabel"];?>
                                                </div>
                                                <?php
                                                  if ($i%3 == 0) 
                                                  {
                                                    echo "<br>";
                                                  }
                                                  $i++;
                                              }
                                              ?>
                    </div>
                        <div class="Bartender">
                                            <?php
                                              $i = 1;
                                              $skills=get_personalskills_bartender();
                                              foreach ($skills as $skill) {
                                                ?>
                                                <div class="col-md-4">
                                                 <input type="checkbox" id="persSkill" name="PersonalSkills[]" value="<?php echo $skill["PersonalSkillID"];?>"><?php echo"&nbsp".$skill["PersonalSkillLabel"];?>
                                                </div>
                                                <?php
                                                  if ($i%3 == 0) 
                                                  {
                                                    echo "<br>";
                                                  }
                                                  $i++;
                                              }
                                              ?>
                    </div>
                </div>
                <br>
                <div class="containera">
                <button type="submit" class="sub" formmethod="post" name="submit" value="submit" ><i class="glyphicon glyphicon-send" aria-hidden="true"></i> Add internship</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.container -->
    <!-- jQuery -->
    <script src="assets/libs/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>
     <script >
  $(document).ready(function() {
    $('#jobcategory').bind('change', function() {
        var elements = $('div.container').children().hide(); // hide all the elements
        var value = $(this).val();

        if (value.length) { // if somethings' selected
            elements.filter('.' + value).show(); // show the ones we want
        }
    }).trigger('change');
});
</script>
    </body>
</html>