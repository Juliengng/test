<?php
session_start();
 require('../Model/firm.php');
 require('../Model/internship.php');

   
	$id=htmlspecialchars($_POST['del']);

	delete_internship($id);

	header('Location: ../View/firm_dashboard.php');
?>