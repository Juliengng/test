<?php

 

    $id = $_SESSION['username'] ;
    $role = $_SESSION['role'];

    $internships = get_firm_internship($id);

    // Pour chaque stage on va calculer le matching de chaque postulant à ce stage                       
    foreach ($internships as $internship)
   	{
        
    	$internshipID= $internship['InternshipID'];
    	$applicants = get_applicants($internshipID);

    	foreach ($applicants as $applicant)
    	{	
            
    		$aplicantName = $applicant["StuUsrName"];
    		matching($internshipID,$aplicantName);

    	}
    	
    }

   
?>