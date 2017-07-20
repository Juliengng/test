<?php
	


	/* Fonction permettant d'obtenir la liste des stages d'une entreprise.*/
	function get_firm_internship($firmusrname)
	{
		
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `internship` WHERE `FirmUsrName`= '$firmusrname' ";
    	
        $result = mysqli_query($link, $sql);
		
		return $result;
	}


	
	function personal_info_firm($id){

		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM `firm_info` WHERE `FirmUsrName`= '$id' ";
    	
        $result = mysqli_query($link, $sql);
		
		return $result;

	}

	function update_firminfo($id,$firmregnum,$firminsnum,$supervisor,$firmname,$activity,$skype){
		include("mysql_connect.inc.php");

		echo $sql="UPDATE `firm_info` SET `FirmRegNum`=IF(LENGTH('$firmregnum')=0, `FirmRegNum`, '$firmregnum'), `FirmInsuranceNum`=IF(LENGTH('$firminsnum')=0,`FirmInsuranceNum`, '$firminsnum'), `Supervisor`=IF(LENGTH('$supervisor')=0,`Supervisor`, '$supervisor'), `FirmName`=IF(LENGTH('$firmname')=0,`FirmName`, '$firmname'), `activity`=IF(LENGTH('$activity')=0, `activity`, '$activity'), `FirmSkypeAccount`=IF(LENGTH('$skype')=0, `FirmSkypeAccount`, '$skype') WHERE `FirmUsrName`='$id'";
		$query = mysqli_query($link,$sql);
		return $query;
	
	}
	


?>