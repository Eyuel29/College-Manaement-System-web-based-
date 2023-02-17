<?php 
session_start();
include("./connection.php");
if ($con) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../style/moblie.css">
    <link rel="stylesheet" href="../3dAssets/style.css">
    <title>MLITC | Login</title>
</head>
<body>
<canvas class="webgl"></canvas>    
    <div class="container">
        <div style="opacity : 0;" class="background-image" id="background-image"><img src="" alt="library" id="bg-img"></div>
        <div class="backdrop" id="backdrop"></div>
        <div class="welcome-modal" id="welcome-modal">
                <div class="welcome-title" id="welcome-title">
                    <h1>Welcome!</h1>
                    <h3>This is the site of Microlink Information Technology College</h3>
                    <h3>You can sign in as user only if you have an account!</h3>
                </div>
                <div style="padding: 0rem 30rem;" class="sign_in" id="sign_in">
                    <button onclick="makeLoginModalVisible()" class="goto-signin inp" id="goto-signin">
                        Sign In
                    </button>
                </div>
        </div>

        <div class="register-modal" id="register-modal">

        <div class="login-logo" id="login-logo">
            <h1 class="lead" id="logo-content">College of Microlink</h1>
        </div>

        <div class="login-form" id="admin-login-form">

            <form class="admin-login-form" action="./login.php" method="post">

            <label for="username" class="lbl" id="login-username">User name</label>
            <input name="adminName" type="text" class="inp" id="login-input-username" required>

            <label for="password" class="lbl" id="login-password">Password</label>
            <input name="password" type="password" class="inp" id="login-input-password" required>

            <button name="submit" type="submit" class="inp login-btn" id="login-input-submit">Login</button>
            <button name="submit" type="reset" class="inp login-btn"  onclick="cancelLoginProcess()" id="login-input-reset" >Cancel</button>

            <div class="goto-register" id="goto-register">
                <label class="lbl-in">User account 
                    &ThickSpace;<a onclick="makeUserFormVisible()" href="#" class="admin-user" id="btn-goto-user-login">Login</a>
                </label>
            </div>
        </form>
        </div>


        <div class="login-form" id="user-login-form">
            
        <form id="form-login" action="./userLogin.php" method="post">

            <label for="username" class="lbl" id="label-username">User ID</label>
            <input name="username" for="username"type="text" class="inp" placeholder="username" id="inp-fname" required>
            
            <label for="userAccountType" class="lbl" id="label-acctype">Account type</label>
            <!-- <input name="usesrAccountType" for="accountType" type="text" placeholder="student or teacher" class="inp" id="inp-acctype" required> -->

            <select required name="userAccountType" id="inp-acctype" class="inp">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>

            <label for="userPassword" class="lbl" id="label-password">Password</label>
            <input name="userPassword" for="password" type="password" class="inp" placeholder="password" id="inp-lname" required>

            <div class="submit-cancel" id="submit-cancel">
                <button name="submit" type="submit" onclick="" class="login-btn inp" id="register">Login</button>
                <button name="reset" type="reset" onclick="cancelLoginProcess()" class="login-btn inp" id="cancel-register">Cancel</button>
            </div>


            <div class="goto-register" id="goto-register">
                <label class="lbl-in" >Admin account
                    &ThickSpace;<a onclick="makeAdminFormVisible()" href="#" class="admin-user" id="btn-goto-admin-login">Login</a>
                </label>
            </div>

            
        </form>
        </div>
        </div>
    </div>
    <script src="../JS/login.js"></script>


    <!--<script src="../JS/accounts.js"></script>
    <script src="../JS/jquery.js"></script> -->
    <?php }
    else{
        echo("<script>window.history.back();alert('Database Not connected!');</script>"); 
    }
    ?>
    
<script src="../3dAssets/three.min.js"></script>
<script src="../3dAssets/gsap.min.js"></script>
<script src="../3dAssets/script.js"></script>
</body>
</html>