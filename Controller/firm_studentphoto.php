 <?php 
  $usrname =$accep['StuUsrName'];
 $infos=get_student_info($usrname);

        foreach($infos as $info)
        {
        		
        echo'<img src="assets/profilepics/'.$info['stu_profile_pic'].'" width="200" height="180"  alt="Profile picture">';
		
		}



?>