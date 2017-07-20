<?php


   
	$infos=get_student_info($usrname);

	foreach($infos as $info)
	{
		$name = $info['Given Name'];
		$surname = $info['Surname'];

	}

		

	
?>