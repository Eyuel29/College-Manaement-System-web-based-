<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $userNameUpdate = $_POST["userIdUpdate"];
    $updatePasswordOne =  $_POST["oldPassword"];
    $updatePasswordTwo =  $_POST["newPassword"];

    if ($_POST["userIdUpdate"] && $_POST["oldPassword"] && $_POST["newPassword"]) {

        $queryGetUpdateAccount = "SELECT * FROM users WHERE username = '$userNameUpdate'";
        $updateAccountObject =  mysqli_query($db,$queryGetUpdateAccount);
        $updateAccountResult = mysqli_fetch_assoc($updateAccountObject);

        if ($updateAccountResult["password"] === $updatePasswordOne) {

                $queryUpdatePassword = "UPDATE `users` SET `password` = '$updatePasswordTwo' WHERE `username` = '".$userNameUpdate."';";
                mysqli_query($con,$queryUpdatePassword);
                echo("<script>window.history.back();alert('Update sucessful');</script>"); 
        }else{
            echo("<script>window.history.back();alert('Invalid Password');</script>"); 
        }
    }else{
        echo("<script>window.history.back();alert('Invalid Information');</script>"); 
    }
}
?>