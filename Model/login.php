<?php
		function login($id,$password){
			global $link;
			$query = mysqli_query($link, "SELECT * FROM `student` WHERE `StuUsrName`= '$id' AND `StuPassword` = '$password'");
			return mysqli_num_rows($query);
		}
		
		function logininternadvisor($id,$password){
			global $link;
			$query = mysqli_query($link, "SELECT * FROM `ambassador` WHERE `AmbUsrName`= '$id' AND `AmbPassword` = '$password'");
			return mysqli_num_rows($query);
		}
		
		function logincompany($id,$password){
			global $link;
			$query = mysqli_query($link, "SELECT * FROM `firm` WHERE `FirmUsrName`= '$id' AND `FirmPassword` = '$password'");
			return mysqli_num_rows($query);
		}
?>	