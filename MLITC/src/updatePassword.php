<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $updatePasswordOne =  $_POST["updatePasswordOne"];
    $updatePasswordTwo =  $_POST["updatePasswordTwo"];

if ($_POST["updatePasswordOne"] && $_POST["updatePasswordTwo"]) {

    if ($updatePasswordOne === $updatePasswordTwo) {
        $queryUpdatePassword = "UPDATE users SET password = '$updatePasswordOne' WHERE userId = '".$_SESSION["userId"]."';";
        mysqli_query($con,$queryUpdatePassword);
        echo("<script>window.history.back();alert('Update sucessful');</script>"); 
    }else{
        echo("<script>window.history.back();alert('Passwords Dont Match');</script>"); 
    }
}else{
    echo("<script>window.history.back();alert('Invalid Inforation');</script>"); 
    // window.location.href = './teacher.php';
}
}
?>