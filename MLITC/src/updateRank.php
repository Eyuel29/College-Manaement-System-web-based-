<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $stdId = $_POST["stdId"];
    $stdTest = $_POST["stdTest"];
    $stdMid = $_POST["stdMid"];
    $stdAssign = $_POST["stdAssign"];
    $stdFinal = $_POST["stdFinal"];
if ($_POST["stdId"]) {
    $queryTeacherClass = "SELECT * FROM users WHERE userId = '".$_SESSION["userId"]."';";
    $teacherClassNameResult = mysqli_query($db,$queryTeacherClass);
    $teacherClassName = mysqli_fetch_assoc($teacherClassNameResult);
    
    $queryUpdateRank = "UPDATE ".$teacherClassName["className"]." SET stdTest = '$stdTest',stdMid = '$stdMid',stdFinal = '$stdFinal', stdAssign = '$stdAssign' WHERE stdId = '$stdId';";
    mysqli_query($con,$queryUpdateRank);
    echo("<script>window.history.back();alert('Update sucessful');</script>"); 
    // ;
}else{
    echo("<script>window.history.back();alert('Invalid Inforation');</script>"); 
}
}
?>