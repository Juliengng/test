<?php 
	
	
 	require('../Model/firm.php');
 	require('../Model/internship.php');

 	if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=='firm')
    {   
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
        $link ="firm_calendar_internship.php";

        $internships=get_firm_internship($id);

        foreach($internships as $internship)
        {
        	echo '<tr>';
        	echo '<td>'.$internship['JobTitle'].'</td>';
        	echo '<td><form action="'.$link.'" method="post">';
        	echo '<button name="subject" type="submit" value="'.$internship['InternshipID'].'">Agenda</button>';
    		echo '</form></td>';
        	echo '</tr>';
        }
    }



?>