<?php
require('../database/mysql_connect.inc.php'); 
require('../Model/login.php'); 
	
   if(isset($_POST['login']) && $_POST['login']=="Log in"){
      $id = $_POST['username'];
   $password = sha1($_POST['password']);
  
  $result = login($id,$password);      //select sql for check username and password
        if ($result==1){
			session_start();
          $_SESSION['username'] = $id;
          $_SESSION['role'] = "student";
		  header("Location: ../View/student_dashboard.php");
		   exit();
        }
        else{
          header("location:../View/login.php?msg=failedstudent");
		   exit();
        }
      }
	  
	 
	 if(isset($_POST['login1']) && $_POST['login1']=="Log in"){
      $id = $_POST['username'];
   $password = sha1($_POST['password']);
  
  $result = logininternadvisor($id,$password);      //select sql for check username and password
        if ($result==1){
			session_start();
          $_SESSION['username'] = $id;
          $_SESSION['role'] = "ambassador";
          header("Location: ../View/ambassador_dashboard.php");
        }
        else{
          header("location:../View/login.php?msg=failedintern");
		   exit();
        }
      }
	  
	   if(isset($_POST['login2'])){
      $id = $_POST['username'];
   $password = sha1($_POST['password']);
  
  $result = logincompany($id,$password);      //select sql for check username and password
        if ($result==1){

          session_start();
          $_SESSION['username'] = $id;
          $_SESSION['role'] = "firm";
          header("location:../View/firm_dashboard.php");

          
		   exit();
        }
        else{
          header("location:../View/login.php?msg=failedcompany");
		   exit();
        }
      }
?>