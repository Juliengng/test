<?php 
session_start();
require('../database/mysql_connect.inc.php'); 
require('../Model/amba_loggedin.php'); 

  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'ambassador') {
    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
	$rows=personal_info($id);
	foreach($rows as $row){
	$profilepic= $row['ProfilePic'];
	$name = $row['GivenName'] . " " . $row['Surname'];
	}
	$rows=get_email_amba($id);
	foreach($rows as $row){
	$email= $row['AmbEmail'];
		}
	

	
  }
  else {
    header('Location: login.php');
    exit();
  }




?>