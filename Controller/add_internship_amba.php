<?php
session_start();
 require('../Model/internship.php');

    if(isset($_SESSION['username']) && isset($_SESSION['role']))
    {   
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];


        if(isset($_POST['submit']) && $_POST['submit']=="submit")
        {
            if(!empty($_POST['name']) && !empty($_POST['jobcategory']) && !empty($_POST['number'])&& !empty($_POST['startdate']) && !empty($_POST['price']) && !empty($_POST['city']) && !empty($_POST['language']) && !empty($_POST['living']) && !empty($_POST['description']) && !empty($_POST['deadline']) && !empty($_POST['duration']) && !empty($_POST['Skills']) && (sizeof($_POST['Skills']) <= 5)  && !empty($_POST['PersonalSkills']) && (sizeof($_POST['PersonalSkills']) <= 5) )
            {
                if($_POST['jobcategory'] != "Job Category" && $_POST['language'] != "Language" )
                {
                    $name=htmlentities($_POST['name']);
                    $jobcategory=htmlentities($_POST['jobcategory']);
					$companyname=htmlentities($_POST['companyname']);
                    $number=htmlentities($_POST['number']);
                    $startdate =htmlentities($_POST['startdate']);
                    $price =htmlentities($_POST['price']);
                    $city=htmlentities($_POST['city']);
                    $language=htmlentities($_POST['language']);
					$language2=htmlentities($_POST['language2']);
					$language3=htmlentities($_POST['language3']);
					$languagelevel=htmlentities($_POST['languagelevel']);
					$languagelevel2=htmlentities($_POST['languagelevel2']);
					$languagelevel3=htmlentities($_POST['languagelevel3']);
                    $living=htmlentities($_POST['living']);
                    $description=htmlentities($_POST['description']);
                    $duration=htmlentities($_POST['duration']);
                    $deadline =htmlentities($_POST['deadline']);
					   $tips=htmlentities($_POST['tips']);

                    $skills= $_POST['Skills'];
                    $persoskills= $_POST['PersonalSkills'];
                    
                    


                   $internshipID=create_internship_amba($tips,$id,$name,$jobcategory,$companyname,$number,$startdate,$price,$city,$language,$language2,$language3,$languagelevel,$languagelevel2,$languagelevel3,$living,$description,$deadline,$duration);
                    
                    

                    
                    foreach($skills as $skill)
                    {
                        add_skills($internshipID,$skill,'1');

                    }

                    foreach($persoskills as $persoskill)
                    {
                        add_personalskills($internshipID,$persoskill,'1');

                    }


                    header("location:../View/ambassador_dashboard.php");
                }
                // Aucune categories ou langues choisies
                else
                {
                header("location:../View/ambassador_postintern.php");
                }

            }
            // champs vide
            else
            {
                header("location:../View/ambassador_postintern.php");
            }

        }
    }
    // Non connecté
    else
    {
        header("location:../View/login.php");
    }




    

?>