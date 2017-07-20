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
    <!-- Custom CSS -->
    <link href="assets/libs/bootstrap-modern-business/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
   <!-- Material Design Bootstrap -->
    <link href="assets/libs/bootstrap-material-design/mdb.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <link href="assets/css/arnaque6.css" rel="stylesheet">
    <link href="assets/css/arnaque2.css" rel="stylesheet">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

  </head>
 <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="assets/img/logovert.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="firm_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DashBoard</span></a></li>
                        <li class="active"><a href="firm_searchintern.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search Intern</span></a></li>
                        
                        <li><a href="firm_calendar.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Settings</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log out</span></a></li>
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
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Intership</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/fz.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Lee San Wei</span>
                                                    <p class="text-muted small">
                                                        HowToLeaveFriendZone
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
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
                    <div class="container">
                        <div class="row text-center">
                            <br>
                            <br>
                            <h1>Choose the skills you are looking for </h1>
                            <h3>Practical skills</h3>
                            <br>
                            
                            <div class="table">
                                    <div class="tr">
                                        <div class="d1" ><label for="primary1" class="btn btn-primary">MS World <input type="checkbox" id="primary1" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d2"> <label for="primary2" class="btn btn-primary">MS Excel<input type="checkbox" id="primary2" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d3">    <label for="primary3" class="btn btn-primary">C language <input type="checkbox" id="primary3" class="badgebox"><span class="badge">&check;</span></label>
                                        </div> 
                                    </div>
                            </div>
                            <div class="table">
                                    <div class="tr">
                                        <div class="d1" ><label for="primary4" class="btn btn-primary">Java <input type="checkbox" id="primary4" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d2"> <label for="primary5" class="btn btn-primary">HTML <input type="checkbox" id="primary5" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d3"> <label for="primary6" class="btn btn-primary">SQL <input type="checkbox" id="primary6" class="badgebox"><span class="badge">&check;</span></label>
                                        </div> 
                                    </div>
                            </div>
                            <div class="table">
                                    <div class="tr">
                                        <div class="d1" ><label for="primary7" class="btn btn-primary">PHP <input type="checkbox" id="primary7" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d2"> <label for="primary8" class="btn btn-primary">Matlab <input type="checkbox" id="primary8" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d3"><label for="primary9" class="btn btn-primary">AutoCAD<input type="checkbox" id="primary9" class="badgebox"><span class="badge">&check;</span></label>
                                        </div> 
                                    </div>
                            </div>
                            <div class="table">
                                    <div class="tr">
                                        <div class="d1" ><label for="primar1" class="btn btn-primary">Photoshop <input type="checkbox" id="primar1" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d2"><label for="primar2" class="btn btn-primary">Video Making <input type="checkbox" id="primar2" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d3"><label for="primar3" class="btn btn-primary">Audio Related<input type="checkbox" id="primar3" class="badgebox"><span class="badge">&check;</span></label>
                                        </div> 
                                    </div>
                            </div>
                             <div class="table">
                                    <div class="tr">
                                        <div class="d1" > <p><label for="primar5" class="btn btn-primary">Auditing <input type="checkbox" id="primar5" class="badgebox"><span class="badge">&check;</span></label>  
                                        </div>
                                        <div class="d2"><label for="primar6" class="btn btn-primary">Management Skills <input type="checkbox" id="primar6" class="badgebox"><span class="badge">&check;</span></label>
                                        </div>
                                        <div class="d3"><label for="primar7" class="btn btn-primary">Accounting Skills <input type="checkbox" id="primar7" class="badgebox"><span class="badge">&check;</span></label>
                                        </div> 
                                    </div>
                            </div>

                        </div>
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

    <script>
        $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
        });
    </script>

    <script>
    $(function () {
    /* BOOTSNIPP FULLSCREEN FIX */
    if (window.location == window.parent.location) {
        $('#back-to-bootsnipp').removeClass('hide');
        $('.alert').addClass('hide');
    } 
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = "http://bootsnipp.com/iframe/Q60Oj";
    });
    
    $('tbody > tr').on('click', function(event) {
        event.preventDefault();
        $('#myModal').modal('show');
    })
    
    $('.btn-mais-info').on('click', function(event) {
        $( '.open_info' ).toggleClass( "hide" );
    })
    
     
    });
    </script>

    <script>
    $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
    });
    });

    </script>

  </body>
</html>
