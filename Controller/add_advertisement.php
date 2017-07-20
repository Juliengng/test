<?php
session_start();
require('../database/mysql_connect.inc.php'); 
 require('../Model/student_loggedin.php');

    if(isset($_SESSION['username']) && isset($_SESSION['role']))
    {   
        // Récupération du nom de la company
        $id = $_SESSION['username'] ;
        $role = $_SESSION['role'];


        if(isset($_POST['submit']) && $_POST['submit']=="submit")
        {
            
                    $position=htmlentities($_POST['position']);
                    $language=htmlentities($_POST['language']);
                    $duration=htmlentities($_POST['duration']);
                    $location =htmlentities($_POST['location']);
           
                    


                   add_advertisement($id,$position,$language,$duration,$location);
                    

                    header("location:../View/student_dashboard.php");
                }

        }
    

?>