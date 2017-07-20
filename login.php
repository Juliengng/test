<?php
session_start();
include("mysql_connect.inc.php");


if (isset($_SESSION['username']))
{
    //select sql for check username and password

    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
    $sql = "SELECT `usrName`, `usrType` FROM `user` WHERE `usrName` = '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result);
    if (isset($row)){
        echo "<meta http-equiv=REFRESH CONTENT=0;url=$row[1]_dashboard.php>";

    }


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
    <title>Welcome to ViceVersa</title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<style type="text/css">
    body {
        background: url(assets/img/image3395-2_1366x666.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<body>
<div class="header-nightsky login">
    <?php
    require ('components/navbar.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form class="form-signin mg-btm" method="post" action="../controller/login.php">
                    <h3 class="heading-desc" style="color:#337ab7;">Login as Student</h3>
                    <div class="social-box">
                        <div class="row mg-btm">
                            <div class="col-md-12">
                                <a href="stu_sign_up.php" class="button-mdn blue inverted">
                                    <i class="icon-facebook"></i>Register as Student
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <input  required="" id="username" name = "username"
                                value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>"
                                type="text" class="form-control" placeholder="Username" autofocus>

                        <input type="password" class="form-control" placeholder="Password" required="" id="password" name = "password">

                        <span class="clearfix"></span>
                        <?php
                        if (isset($_GET["msg"]) && $_GET["msg"] == 'failedstudent') {
                            echo '<p style="color: red">Wrong Username / Password </p>';
                        }
                        ?>
                    </div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="left-section">
                                    <a href="">Forgot your password?</a>

                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-primary pull-right" value="Log in" name="login">Login</button>
                            </div>



                        </div>

                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <form class="form-signin mg-btm" method="post" action="../controller/login.php">
                    <h3 class="heading-desc" style="color:#f0ad4e">
                        Login as Intern Advisor
                    </h3>
                    <div class="social-box" >
                        <div class="row mg-btm">
                            <div class="col-md-12">
                                <a href="AmbSignup.php" class="button-mdn orange inverted">
                                    <i class="icon-facebook"></i>Register as Intern Advisor
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <input type="text" class="form-control" placeholder="Username" autofocus required="" id="username" name = "username">
                        <input placeholder="Password" required="" id="password" name = "password" type="password" class="form-control">



                        <?php
                        if (isset($_GET["msg"]) && $_GET["msg"] == 'failedintern') {
                            echo '<p style="color: red">Wrong Username / Password </p>';
                        }
                        ?>
                    </div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="left-section">
                                    <a href="">Forgot your password?</a>

                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-warning pull-right" value="Log in" name="login1">Login</button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <form class="form-signin mg-btm" method="post" action="../controller/login.php">
                    <h3 class="heading-desc" style="color:#504e63;">
                        Login as Company</h3>
                    <div class="social-box">
                        <div class="row mg-btm">
                            <div class="col-md-12">
                                <a href="firm_register.php" class="button-mdn green inverted">
                                    <i class="icon-facebook"></i>Register as Company
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <input type="text" class="form-control" placeholder="Username" autofocus required="" id="username" name = "username">
                        <input type="password" class="form-control" placeholder="Password" required="" id="password" name = "password">
                        <?php
                        if (isset($_GET["msg"]) && $_GET["msg"] == 'failedcompany') {
                            echo '<p style="color: red">Wrong Username / Password </p>';
                        }
                        ?>
                    </div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="left-section">
                                    <a href="">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-success pull-right"  name="login2">Login</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require("components/contact.php");?>
<?php require("components/footer.php");?>
<script src="assets/libs/jquery/jquery.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/libs/bootstrap/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
</body>
</html>
