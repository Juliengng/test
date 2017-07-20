<?php 
session_start();

  if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] == 'firm') {
    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];
	if(!isset($id))
	{
		header('Location: logout.php');
	}
	else
	{
		$infos=personal_info_firm($id);
			foreach($infos as $info)
			{
				$firmname=$info['FirmName'];
				$firmPP=$info['ProfilePic'];
			}
	}
  }
  else {
    header('Location: login.php');
    exit();
  }




?>