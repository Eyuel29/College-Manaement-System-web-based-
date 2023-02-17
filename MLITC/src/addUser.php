<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){

$userId = $_POST["userId"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$accountType = $_POST["accountType"];
$username = $_POST["username"];
$password = $_POST["password"];
$className;

if ($_POST["className"]) {
    $className = $_POST["className"];
}else{
    $className = "Not teacher";
}


if($userId && $firstName && $lastName && $email && $accountType && $username && $password && $className){
    if ($accountType === "student") {

        $sqlAdd = "INSERT INTO users(userId,firstName,lastName,email,accountType,username,password,className) VALUES('$userId','$firstName','$lastName','$email','$accountType','$username','$password','$className');";
        mysqli_query($db,$sqlAdd);
        echo("<script>window.location.href = './home.php';alert('User added!');</script>"); 
        die;       
    }
    else if ($accountType === "teacher") {
        $sqlAddTeacher = "INSERT INTO users(userId,firstName,lastName,email,accountType,username,password,className) VALUES('$userId','$firstName','$lastName','$email','$accountType','$username','$password','$className');";
        $sqlClassTable = "CREATE TABLE ".$className." (stdId VARCHAR(100) PRIMARY KEY, stdFname VARCHAR(100), stdLname VARCHAR(100), stdTest INT, stdMid INT, stdFinal INT, stdAssign INT);";
        mysqli_query($db,$sqlAddTeacher);
        mysqli_query($db,$sqlClassTable);
        echo("<script>window.location.href = './home.php';alert('User added!');</script>"); 
        die;       
    }
}else{
    echo("<script>window.location.href = './home.php';alert('Invalid');</script>");
}
}
?>