<?php
session_start();
include("../CLIENT/src/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./3dAssets/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./style/moblie.css">
    <title>MLITC | Welcome</title>
</head>
<body>
<canvas class="webgl"></canvas>
    <!-- <div class="background-image" id="background-image"><img src="./IMAGES/collaboration.jpg" alt="library" id="bg-img"></div> -->
    <div class="welcome-modal" id="welcome-modal">
        <div class="welcome-title" id="welcome-title">
            <h1>Welcome!</h1>
            <h3>This is the site of Microlink Information Technology College</h3>
        </div>
        <div class="about-us" id="about-us">
            <h3 id="about-us-content">

            </h3>
            
                <a style="text-decoration: none;" href="./src/loginPage.php"><button class="goto-signin" id="goto-signin">Sign In</button></a>
                <a style="text-decoration: none;" href="#"><button class="goto-signin" id="goto-signin">More</button></a>
            
        </div>
</div>

<!-- more options -->

<script src="./3dAssets/three.min.js"></script>
<script src="./3dAssets/gsap.min.js"></script>
<script src="./3dAssets/script.js"></script>
</body>
</html>