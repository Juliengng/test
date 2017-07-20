<?php session_start();
include("mysql_connect.inc.php");
if (isset($_SESSION['username']))
{
				$id = $_SESSION['username'] ;
				$role = $_SESSION['role'];
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
        background: url(assets/img/image3395-2.png) no-repeat center center fixed;
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
            <div class="col-md-6 col-md-offset-3">
                <form class="form-signin mg-btm" method="post" action="">
                    <h1 class="heading-desc" style="background-color:#337ab7;">Create an account</h1>
                    <div class="main">
                       <p style="color:black"> <input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>" required="" class="form-control" autofocus>
                        <input type="password" name="password" id="password" placeholder="Password(8 characters/a number/ a capital letter)" value="" required="" class="form-control" autofocus>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm password(8 characters/a number/ a capital letter)" value="" required="" class="form-control" autofocus>
                        <input type="email" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" required="" class="form-control" autofocus>
                        <input type="email" name="confirmemail" id="confirmemail" placeholder="Email confirmation" value="<?php if(isset($_POST['confirmemail'])){ echo $_POST['confirmemail']; } ?>" required="" class="form-control" autofocus>
                     <input type="checkbox" name="vehicle" value="Bike"> I accept the CGU</p>
					</div>
                    <div class="login-footer">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 pull-right">
                                <button type="submit" class="btn btn-large btn-primary pull-right" value="submit" name="next">Submit and next</button>
                            </div>
                        </div>
                    </div>

                    <?php
                    //check for any errors
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<p class="bg-danger">'.$error.'</p>';
                        }
                    }
                    ?>

                    <?php

                    if(isset($_POST['next']) && $_POST['next']=="submit"){
                        $id = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
						
						
                    }

                    // checking


                    if(isset($_POST['next'])){
                        //very basic validation
                        if(strlen($_POST['username']) < 3){
                            $error[] = 'Username is too short.';
                        } else {

                            //select sql for check existing username
                            $sql = "SELECT * FROM `user` WHERE usrName = '$id'";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_row($result);
                            if(!empty($row[0])){
                                $error[] = 'Username provided is already in use.';
                            }
                        }

                        //checking the password
                        if(strlen($_POST['password']) < 8|| strlen($_POST['passwordConfirm']) < 8){
                            $error[] = 'Password is too short.';
                        }


                        if($_POST['password'] != $_POST['passwordConfirm']){
                            $error[] = 'Passwords do not match.';
                        }

                        if(!preg_match("#[0-9]+#",$password)) {
                            $error[] = "Password should contain at least 1 number!";
                        }

                        if(!preg_match("#[A-Z]+#",$password)) {
                            $error[] = "Password should contain at least 1 capital letter!";
                        }

                        if(!preg_match("#[a-z]+#",$password)) {
                            $error[] = "Password should contain at least 1 lowercase letter!";
                        }

                        //checking email

                        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                            $error[] = 'Please enter a valid email address';
                        } else {

                            if($email != $_POST['confirmemail']){

                                $error[] = 'Please enter the same email address in both Email and Confirm your email field';
                            }

                            //select sql for check if email account is registered
                            $sql = "SELECT `StuEmail` FROM `student` WHERE StuEmail = '$email'";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_row($result);

                            if(!empty($row['email'])){
                                $error[] = 'Email provided is already in use.';
                            }

                        }

                        //checking agree tick


                    }
                    if(isset($error)){
                        foreach($error as $errrow){
                            ?>
                            <br>
                            <font color="red">
                                <?php
                                echo $errrow;
                                ?>
                            </font>
                            <?php
                        }
                    }
                    // send sql to the DB

                    if(empty($error[0])){
                        if (isset($_POST['next'])&& $_POST['next']== "submit"){
                            $password= sha1($password);
                            $sql = "INSERT INTO `user`(`usrName`, `usrType`) VALUES ('$id', 'student');";
							
                            mysqli_query($link, $sql);
                            //$sql = "INSERT INTO `student`(`StuUsrName`, `StuPassword`, `StuEmail`,  `StuApproved`) VALUES ('username','$password','$email',0);";
                            $sql = "INSERT INTO `student`(`StuUsrName`, `StuPassword`, `StuEmail`,  `StuApproved`) VALUES ('$id','$password','$email',0);";
                            if(mysqli_query($link, $sql)){

                                $_SESSION['username'] = $id;
                                $_SESSION['role'] = 'student';
                                echo '<meta http-equiv=REFRESH CONTENT=0;url=stu_person_info.php>';
                                echo 'registration success!';
                            }
                            else{

                                echo 'registration fail!';

                            }
                        }
                    }
                    ?>

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

