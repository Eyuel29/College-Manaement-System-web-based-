<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "student_management_system";

    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if ($db = mysqli_connect($db_host,$db_user,$db_pass,$db_name)) {
        // echo("database working..");
    }else{
        die("failed to connect to the database");
    }
    
?>