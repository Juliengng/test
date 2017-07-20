<?php 
require('../controller/amba_loggedin.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome <?php echo $name;?></title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
    <link href="assets/libs/bootstrap-material-design/mdb.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
 <link href="assets/css/ambassador_dashboard.css" rel="stylesheet">
	<link href="assets/css/ambassador_dashboard_table.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara" rel="stylesheet">

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="ambassador_dashboard.php"><img src="assets/img/logoamba.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="ambassador_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DashBoard</span></a></li>
                   
                        <li class="active"><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Internship</span></a></li>
           <li><a href="ambassador_advertisement.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Advertisements</span></a></li>
                        <li><a href="amb_dashboard_profile.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile Page</span></a></li>
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
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="ambassador_postintern.php"><button class="button-mdn dark"><i class="fa fa-plus" style="color:#8492af;" aria-hidden="true"></i>  Add Internship </button></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/profilepics/<?php echo $profilepic;?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $name;?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $email;?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="amb_dashboard_profile.php" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Fill in the details below to add an internship</h1>
               <form method="post" action="../controller/add_internship_amba.php" >
                        <input type="text" placeholder="Internship Title" name="name" class="add_intern"> <br>
						<select id="jobcategory1" name="jobcategory1" title="Internship" class="add_intern selectpicker"><br>
                            <option data-hidden="true">Choose a category</option>
							<option data-hidden="true">Saisonnier</option>
							</select>
                        <select id="jobcategory" name="jobcategory" title="Internship" class="add_intern selectpicker"><br>
                            <option data-hidden="true">Job Category</option>
                        <?php
                        require('../Model/internship.php');
                        $arrayJobCategory=get_jobcategory();

                        foreach($arrayJobCategory as $category){
                            ?><option value="<?php echo "$category";?>"><?php echo "$category";?></option><?php
                        }
                        ?>
                        </select>
						<input type="text" placeholder="Company Name" name="companyname" class="add_intern"><br>
                        <input type="number" placeholder="Number of interns" name="number" class="add_intern"><br>
                        <input type="text" placeholder="Application Deadline" name="deadline" class="add_intern" onfocus="(this.type='date')" onblur="(this.type='text')"><br>
                        <input type="text" placeholder="Starting Date" name="startdate" class="add_intern" onfocus="(this.type='date')" onblur="(this.type='text')"><br>
                        <input type="text" placeholder="Duration" name="duration" class="add_intern"><br>
                        <input type="text" placeholder="Salary/month" name="price" class="add_intern"><br>
                        <input type="text" placeholder="City / Country" name="city" class="add_intern"><br>
                        <select name="language" title="Language" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 1</option>
                        <?php
                        
                        $arraylanguages=get_language();

                        foreach($arraylanguages as $language){
                            ?><option><?php echo "$language";?></option><?php
                        }
                        ?>
                        </select>
						<select name="languagelevel" title="LanguageLevel" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 1 Level</option>
						<option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
						<option value="Advanced">Advanced</option>
						<option value="Fluent">Fluent</option>
                        </select>
						<select name="language2" title="Language2" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 2</option>
                        <?php
                        
                        $arraylanguages=get_language();

                        foreach($arraylanguages as $language){
                            ?><option><?php echo "$language";?></option><?php
                        }
                        ?>
                        </select>
												<select name="languagelevel2" title="LanguageLevel2" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 2 Level</option>
						<option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
						<option value="Advanced">Advanced</option>
						<option value="Fluent">Fluent</option>
                        </select>
						<select name="language3" title="Language3" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 3</option>
                        <?php
                        
                        $arraylanguages=get_language();

                        foreach($arraylanguages as $language){
                            ?><option><?php echo "$language";?></option><?php
                        }
                        ?>
                        </select>
												<select name="languagelevel3" title="LanguageLevel3" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Language 3 Level</option>
					<option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
						<option value="Advanced">Advanced</option>
						<option value="Fluent">Fluent</option>
                        </select>

                        <input type="number" placeholder="Living Cost/month" name="living" class="add_intern"><br>
						<input type="number" placeholder="Tips" name="tips" class="add_intern"><br>
						<select name="languagelevel" title="LanguageLevel" class="add_intern selectpicker"><br>
                        <option data-hidden="true">Currency</option>
						<option value="Beginner">Euro</option>
                        <option value="Intermediate">CZK</option>
						<option value="Advanced">DKK</option>
						<option value="Fluent">HUF</option>
						<option value="Beginner">CHF</option>
                        <option value="Intermediate">NOK</option>
						<option value="Advanced">PLN</option>
						<option value="Fluent">RON</option>
						<option value="Beginner">RUB</option>
                        <option value="Intermediate">RSD</option>
						<option value="Advanced">SEK</option>
						<option value="Fluent">TRY</option>
						<option value="Beginner">GBP</option>
                        <option value="Intermediate">UAH</option>
						<option value="Advanced">SEK</option>
						<option value="Fluent">TRY</option>
                        </select>
                        <textarea placeholder="" style="height: 30%;margin-bottom: 15%;" rows="8" cols="50" name="description" class="add_intern">Describe the internship here</textarea><br>
                        
						
					
						
						
                <div class="form-group">
                  <div class="input-group col-sm-8">
                    <h3><b> Skills required</b></h3><br>
                   	<div class="container">
    <div class="Receptionist">
        Practical skills for receptionist<br><br>
    </div>
    <div class="Chef">
        Practical skills for chef<br><br>
    </div>
	<div class="Waiter">
        Practical skills for waiter<br><br>
    </div>
	<div class="Bartender">
        Practical skills for bartender<br><br>
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
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group col-sm-8">
                                     	<div class="container">
    <div class="Receptionist">
        Personal skills for receptionist<br><br>
    </div>
    <div class="Chef">
        Personal skills for chef<br><br>
    </div>
	<div class="Waiter">
        Personal skills for waiter<br><br>
    </div>
	<div class="Bartender">
        Personal skills for bartender<br><br>
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
                  </div>
                </div>
                <button type="submit" class="button-mdn dark" formmethod="post" name="submit" value="submit" style="width:40%;margin-left:30%;"><i class="fa fa-plus" aria-hidden="true"> </i> Add internship</button>
                </form>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
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

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/dash.js"></script>
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
