<?php
session_start();
ini_set('display_errors','0');
include("./connection.php");
include("./functions.php");

$_SESSION['userId'];
$_SESSION["studId"];
$studUserId;

$username = $_POST["username"];
$userAccountType = $_POST["userAccountType"];
$userPassword = $_POST["userPassword"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM `users` WHERE username = '$username' AND accountType = '$userAccountType' AND password = '$userPassword';";
    
    $result = mysqli_query($db,$query);
    $userData = mysqli_fetch_assoc($result);

    if ($username && $userAccountType && $userPassword) {
    if ($userData["password"] && $userData["accountType"] && $userData["username"]) {

        if ($userData["accountType"] === "teacher") {
            logTeacherIn($userData["username"],$userData["password"],$username,$userPassword);
            $_SESSION['userId'] = $userData["userId"];
        }else if ($userData["accountType"] === "student") {
            logStudentIn($userData["username"],$userData["password"],$username,$userPassword);
        }else {
            echo ("<script>window.history.back();alert('Another user logged in please wait.')</script>");                    
            die;
        }
    }else{
        echo ("<script>window.history.back();alert('No account found')</script>");                    
        die;
    }
}
    }
?>