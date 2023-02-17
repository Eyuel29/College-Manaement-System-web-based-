<?php
session_start();
include("./connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
$eventDesc = $_POST["inputEvent"];
$eventDate = $_POST["inputDate"];

    if($eventDesc && $eventDate){
        
        $sqlAdd = "INSERT INTO events(eventMessage,eventDate) VALUES('$eventDesc','$eventDate');";

        mysqli_query($db,$sqlAdd);
        echo("<script>window.location.href = './home.php';alert('Event added!');</script>"); 
        die;       

    }else{
        header("Location: home.php");
        echo("<script>alert('Invalid information!');</script>");
    }
    }
    // window.location.href = './home.html';
?>



