<?php 
session_start();
unset($_SESSION["studentOpen"]);
echo("<script>window.location.href = '../index.php';alert('logged out');</script>"); 
?>