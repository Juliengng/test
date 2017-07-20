<?php 
require('../controller/student_loggedin.php'); 
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to ViceVersa</title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
    <link href="assets/libs/bootstrap-material-design/mdb.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="assets/css/student_dashboard.css" rel="stylesheet">
	<link href="assets/css/student_dashboard_table.css" rel="stylesheet">
	<link href="assets/css/amba_profile.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara" rel="stylesheet">

  </head>
 <body class="home" >
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="student_dashboard.php"><img src="assets/img/logostudent.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
					<li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search Internship</span></a></li>
                        <li><a href="student_interview.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Interviews</span></a></li>
						
                        <li><a href="student_postad.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Post Advertisement</span></a></li>
          
                        <li><a href="student_dashboard_profile.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile Page</span></a></li>
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
                            
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                   
                                  
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/profilepics/<?php echo $profilepic;?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?php echo $name; ?></span>
                                                    <p class="text-muted small">
                                                        <?php echo $email; ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="student_dashboard_profile.php" class="view btn-sm active">View Profile</a>
													<a href="#" class="view btn-sm active" data-toggle="modal" data-target="#add_project1">Delete your account</button></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard" link="black">
				<div class="row">
				<div class="col-sm-5"><h1 style="float:left"><?php echo $row_count;?> internship offers</h1>
			</div>
				<div class="col-sm-7" ><br>
 				<input type="text" style="font-size:25px" id="myInput" onkeyup="myFunction()" placeholder="Search for internship by title, location or language">
					</div>
					</div>
                <table id="myTable" class="responstable">
  
  <tr>
    <th align="center">Position</th>
    <th align="center"><span>Location</span></th>
	<th align="center">Language</th>
    
	<th align="center">Duration</th>
	<th align="center">Starting date &<br>Application deadline</th>
	<th align="right">Posted by</th>
    

  </tr>
    <?php include("../controller/student_internshipslist.php"); ?>
  
  
  
</table>
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
	
	    <!-- Modal -->
			<div id="add_project1" class="modal fade" role="dialog">
	<form  method="post" action="">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Are you sure you want to delete your account?</h4>
                </div>
				
                <div class="modal-footer">
				
                    <button type="button" class="cancel" data-dismiss="modal">No</button>
					
                    <a href="logout.php" class="add-project" >Yes</a>
					
				<?php	
				if(isset($_POST['delete'])){
					require('../Model/student_loggedin.php'); 
					require('../database/mysql_connect.inc.php'); 
		$id=$_POST['delete'];
		
		delete_student($id);
		   
		  header("Location:../view/logout.php");
		
		
		
		  }	
		  ?>
                </div>
			
            </div>

        </div>
			</form>
    </div>
	
    <div id="internship1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Internship Description</h4>
                </div>
                <div class="modal-body">
                            <p><i>At Disney, we‘re storytellers. We make the impossible, possible. We do this through utilizing and developing cutting-edge technology and pushing the envelope to bring stories to life through our movies, products, interactive games, parks and resorts, and media networks. Now is your chance to join our talented team as a Professional Intern in any of our segments that delivers unparalleled creative content to audiences around the world.

                            The Data Integration team provides analytical consulting support to a number of business units across The Walt Disney Company, including Media Networks, Parks and Resorts, Studio Entertainment, Consumer Products and Interactive Media.</i></p>

                            <h5><u>Responsibilities</u></b></h5>

                            <p>This individual will be part of a team that is supporting the development and implementation of advertising sales support tools for ESPN, ABC and Disney Media Networks. 

                            As a member of the Data Integration team, this individual will be responsible for building data visualization tools, UI design and the integration of data output into business intelligence tools that drive actionable insight and improved business decisions. </p>

                            <h5><u>Basic Qualifications</u></b></h5>
                            <p>Experience with programming HTML, CSS, and JavaScript</br>
                                Familiarity with jQuery, XML, JSON, and AJAX</br>
                                Demonstrated strong attention to detail</br>
                                Experience with collecting and visualizing data</br>
                                Effective verbal and written communication skills</br>
                                ​Ability to adapt to a rapidly changing business environment and manage multiple priorities</p>

                            <p><h5><u> Date : </u></b></h5> 01/06/2017 - 30/09/2017</p>
                            <p><h5><u> Price : </u></b></h5> 200€ / Month</p>
                            <p><h5><u> Number of intern : </u></b></h5> 2</p>

                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Modify Internship</button>
                </div>
            </div>

        </div>
    </div>

    <?php include("amba_profile.php"); ?>


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
	<script>
function myFunction() {

  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
	
	if(tr[i].style.display == ""){
		continue;
	}
	else{
	 td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
	}
	if(tr[i].style.display == ""){
		continue;
	}
	else{
	 td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
	}
  }

}
</script>
<script>
function onFunction() {
    confirm("Votre candidature a été remplie avec succès. L’entreprise vous contactera pour vous proposer un entretien si votre profil a été retenu. Autrement retentez votre chance avec une autre entreprise !");
}
</script>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
  </body>
</html>
