<?php
session_start();
 require('../Model/firm.php');
 require('../Model/internship.php');
 require('../controller/matching.php');

    if(isset($_SESSION['username']) && isset($_SESSION['role']))
    {   
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];
       

        if(isset($_POST['submit']) && $_POST['submit']=="submit")
        {
          
                 



            if(!empty($_POST['name']) && !empty($_POST['jobcategory']) && !empty($_POST['number'])&& !empty($_POST['startdate']) && !empty($_POST['price']) && !empty($_POST['city']) && !empty($_POST['language'])  && !empty($_POST['description']) && !empty($_POST['deadline']) && !empty($_POST['duration'])&& !empty($_POST['Skills']) && (sizeof($_POST['Skills']) <= 5)&& !empty($_POST['PersonalSkills']) && (sizeof($_POST['PersonalSkills']) <= 5) && !empty($_POST['sup']))
            {
                
                if($_POST['jobcategory'] != "Job Category" && $_POST['language'] != "Language" )
                {
                    $name=htmlentities($_POST['name']);
                    $jobcategory=htmlentities($_POST['jobcategory']);
                    $number=htmlentities($_POST['number']);
                    $startdate =htmlentities($_POST['startdate']);
                    $price =htmlentities($_POST['price']);
                    $city=htmlentities($_POST['city']);
                    $country=htmlentities($_POST['country']);
                    $location=$city . ", " . $country;
                    $language=htmlentities($_POST['language']);
                    $language2=htmlentities($_POST['language2']);
                    $language3=htmlentities($_POST['language3']);
                    $languagelevel=htmlentities($_POST['languagelevel']);
                    $languagelevel2=htmlentities($_POST['languagelevel2']);
                    $languagelevel3=htmlentities($_POST['languagelevel3']);
                    $living=htmlentities($_POST['living']);
                    $description=htmlentities($_POST['description']);
                    $duration=htmlentities($_POST['duration']);
                    $month=$duration . " months";
                    $deadline =htmlentities($_POST['deadline']);
                    $sup=htmlentities($_POST['sup']);
                    


                    $persoskills= $_POST['PersonalSkills'];
                    $skills= $_POST['Skills'];
                    
                    

                   $internshipID=create_internship($id,$name,$sup,$jobcategory,$number,$startdate,$price,$location,$language,$language2,$language3,$languagelevel,$languagelevel2,$languagelevel3,$living,$description,$deadline,$month);
                    
                    

                    
                    
                    $i=1;
                    

                    foreach($skills as $skill)
                    {
                        add_skills($internshipID, $skill,$i);
                        $i++;

                    }


                    foreach($persoskills as $persoskill)
                    {
                        add_personalskills($internshipID,$persoskill);

                    }



                    header("location:../View/firm_dashboard.php");
                }
                // Aucune categories ou langues choisies
                else
                {
                    $msg ="Please, choose atleast one category and one language ";
                    header("location:../View/add_internship.php?msg1=" .$msg);
                }

            }
            // champs vide
            else
            {   
                $msg ="Please, fill in all the fields";
                header("location:../View/add_internship.php?msg2=" .$msg);
            }

        }
    }
    // Non connecté
    else
    {
       
       header("location:../View/login.php");
    }




    

?>