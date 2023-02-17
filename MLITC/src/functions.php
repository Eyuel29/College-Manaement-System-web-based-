<?php
session_start();
include("./connection.php");

function logStudentIn($un, $up,$uin, $uip){
    if ($uin === $un) {
    if ($uip === $up) {
        $_SESSION["studentOpen"] = false;
        header("Location: student.php");
    }else {
        echo ("<script>alert('Wrong password!')</script>");                    
        header("Location: login.html");                
        die;
    }   
    }else{
        echo ("<script>alert('Wrong username!')</script>");                    
        header("Location: login.html");                
        die;
    }
        }


    function logTeacherIn($un, $up,$uin, $uip){
        if ($uin === $un) {
        if ($uip === $up) {
            $_SESSION["teacherOpen"] = false;
            header("Location: teacher.php");
        }else {
            echo ("<script>alert('Wrong password!')</script>");                    
            // header("Location: login.html");                
            die;
        }   
        }else{
            echo ("<script>alert('Wrong username!')</script>");                    
            // header("Location: login.html");                
            die;
        }
            }
            
    function createClassTable($db,$className) {
        $queryClass = "CREATE TABLE '$className'(stdId VARCHAR(100) PRIMARY KEY, stdFname VARCHAR(100), stdLname VARCHAR(100), stdTest INT, stdMid INT, stdFinal INT,);";
        mysqli_query($db,$queryClass);
    }
        
?>