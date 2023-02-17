<?php
        // session_start();
        $resultClassInfo;
        require_once("./connection.php");
        $queryEvents = "SELECT * FROM events";
        $resultEvents = mysqli_query($db,$queryEvents);

        $queryAccountStudents = ("SELECT * FROM users WHERE accountType = 'student'");
        $resultAccountStudents = mysqli_query($db,$queryAccountStudents);

        
        $queryAccountTeachers = "SELECT * FROM users WHERE accountType = 'teacher'";
        $resultAccountTeachers = mysqli_query($db,$queryAccountTeachers);

        $queryMessages = "SELECT * from contacts";
        $resultMessages = mysqli_query($db,$queryMessages);
?>