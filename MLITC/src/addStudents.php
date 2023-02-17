<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){

$userId =    $_POST["MclassId"];
$firstName = $_POST["MclassFname"];
$lastName =  $_POST["MclassLname"];




if( $_POST["MclassId"] && $_POST["MclassFname"] && $_POST["MclassLname"] ){
    
    $queryTeacherClass = "SELECT * FROM users WHERE userId = '".$_SESSION["userId"]."';";
    $teacherClassNameResult = mysqli_query($db,$queryTeacherClass);
    $teacherClassName = mysqli_fetch_assoc($teacherClassNameResult);

    $addStudetntToClassQuery = "INSERT into ".$teacherClassName["className"]."(stdId,stdFname,stdLname)
    VALUES('$userId','$firstName','$lastName');";

    mysqli_query($db,$addStudetntToClassQuery);
    echo("<script>window.history.back();alert('Student added!');</script>"); 
}else{
    echo("<script>window.history.back();alert('Invalid Inforation');</script>"); 
}
}
?>