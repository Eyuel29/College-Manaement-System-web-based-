<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" media = "screen and (max-width: 768px)" href="../style/moblie.css">
    <title> MLITC | Teacher</title>
</head>
<body>
<?php
        session_start();
        include("./connection.php");        
        include("./fetchData.php");  
        ini_set('display_errors','0');

        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $contactName = $_POST["inputNameContact"];
        $contactMessage = $_POST["inputMessageContact"];
        $contactDate = date("d-m-y");

            if($contactMessage && $contactDate){
                if (!$contactName) {
                    $contactName = "User";
                }

                $sqlAddContact = "INSERT INTO contacts(contactName,contactMessage,contactDate) VALUES('$contactName','$contactMessage','$contactDate');";
                mysqli_query($db,$sqlAddContact);
                echo("<script>;alert('Message sent!');</script>"); 
                echo("<script>window.location.href = './student.php';</script>");
                die;
            }else{
                echo("<script>alert('Invalid information!');</script>");
            }


            }
    ?>

    <?php 
    ini_set('display_errors','0');
    include("./connection.php");
    require_once("./fetchData.php");

    $username = $_POST["username"];
    $userAccountType = $_POST["userAccountType"];
    $userPassword = $_POST["userPassword"];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "SELECT * FROM `users` WHERE username = '$username' AND accountType = '$userAccountType' AND password = '$userPassword';";
        
        $result = mysqli_query($db,$query);
        $userData = mysqli_fetch_assoc($result);
    }
    ?>

 <!-- checking weather the page is accessed by  login or using location it only opens the page is the teacherOpen 
session variable is set to true -->

    <div class="container dark-light" id="container">
        <div class="navbar-outer dark-light" id="navbar-outer">
            <div class="navbar-inner" id="navbar-inner">
                <div class="nav-logo" id="nav-logo">
                    <img src="../IMAGES/microlink-logo.jfif" alt="micro-logo" class="img-logo" id="micro-logo">
                    <p class="lead" id="nav-logo-title">Microlink IT College</p>
                </div>
                <div class="nav-options dark-light" id="nav-options">
                    <ul class="options-list lead" id="options-list">
                        <a onclick="" href="#update-password-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-users">Account</li></a>
                        <a onclick="" href="#student-management-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages">class</li></a>
                        <a onclick="" href="#contact-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages">Contact</li></a>
                        <a onclick="" href="#events-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages" >Events</li></a>
                        <a onclick="" href="#logout-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-events"  >Logout</li></a>
                    </ul>
                </div>

            <!-- lightmode icon -->

                <div class="nav-profile-burger" id="nav-profile-burger">
                    <div class="nav-lightmode" id="nav-lightmode">  
                        <svg
                        onclick="lightMode()"
                        class="img-lightmode"
                        id="img-lightmode"
                        fill="#fee"
                        width="3rem"
                        height="3rem"
                        viewBox="-4 -3.5 24 24"
                        preserveAspectRatio="xMinYMin">
                        <path d='M8 12.858a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6-5h1a1 1 0 0 1 0 2h-1a1 1 0 0 1 0-2zm-6 6a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1zm0-13a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1zm-7 7h1a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2zm11.95 4.535l.707.708a1 1 0 1 1-1.414 1.414l-.707-.707a1 1 0 0 1 1.414-1.415zm-8.486 0a1 1 0 0 1 0 1.415l-.707.707A1 1 0 0 1 2.343 13.1l.707-.708a1 1 0 0 1 1.414 0zm9.193-9.192a1 1 0 0 1 0 1.414l-.707.707a1 1 0 0 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0zm-9.9 0l.707.707A1 1 0 1 1 3.05 5.322l-.707-.707a1 1 0 0 1 1.414-1.414z' />
                        </svg>
                    </div>
                <!-- lightmode icon -->
    
                
                <!-- darkmode icon -->

                    <div class="nav-nightmode" id="nav-nightmode">  
                        <svg
                            onclick="darkMode()"
                            class="img-nightmode" 
                            id="img-nightmode" 
                            width="3rem"
                            height="3rem" 
                            viewBox="0 0 24 24" 
                            fill="none">
                          <path d="M9.00333 5.43284C10.0138 5.04231 11.0994 4.91335 12.1676 5.05694C13.2359 5.20054 14.2552 5.61245 15.1388 6.25757C16.0223 6.9027 16.7439 7.76194 17.2421 8.76211C17.7403 9.76228 18.0003 10.8738 18 12.0019C17.9997 13.13 17.7391 14.2413 17.2404 15.2412C16.7417 16.2411 16.0197 17.0999 15.1358 17.7446C14.252 18.3892 13.2324 18.8005 12.1641 18.9435C11.0958 19.0865 10.0102 18.957 9 18.5659C9 18.5659 13 16.1176 13 12C13 7.88235 9.00333 5.43284 9.00333 5.43284Z" 
                            fill="#211"
                            stroke="#211" 
                            stroke-width="2" 
                            stroke-linejoin="round"/>
                        </svg>
                    </div>
                <!-- darkmode icon -->

                    <div class="nav-profile" id="nav-profile">
                        <img src="../ICONS/accounts.svg" alt="accounts" class="img-logo" id="img-account">
                    </div>
                    <div class="nav-options-burger-menu" id="nav-options-burger-menu">
                        <svg 
                            onclick="openBurgerMenu()"
                            width="3rem" height="3rem" id="burger-menu-icon"  viewBox="0 0 12 12" id="burger-menu-icon" enable-background="new 0 0 12 12" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g>
                            <rect fill="#211" height="1.5" width="11" x="0.5" y="5.5"/>
                            <rect fill="#211" height="1.5" width="11" x="0.5" y="2.5"/>
                            <rect fill="#211" height="1.5" width="11" x="0.5" y="8.5"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-closed"></div>
        <div class="menu-modal dark-light lead" id="menu-modal">


            <ul class="ul-menu-modal lead" id="ul-menu-modal">
                <div class="burger-option" id="burger-option">
                    <!-- close icon -->
                    <svg
                        onclick="closeBurgerMenu()"
                        width="3rem"
                        height="3rem" 
                        viewBox="0 0 24 24">
                        <path id="close-burger" 
                        stroke="#e33" 
                        stroke-width="2"
                        fill="#e33"
                        fill-rule="evenodd"
                        clip-rule="evenodd" 
                        d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"/>
                    </svg>
                    <!-- close icon -->
                </div>
                <li class="burger-option" id="burger"><a onclick="" href="#update-password-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-users">Account</li></a></li>
                <li class="burger-option" id="burger"><a onclick="" href="#student-management-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages">class</li></a></li>
                <li class="burger-option" id="burger"><a onclick="" href="#contact-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages">Contact</li></a></li>
                <li class="burger-option" id="burger"><a onclick="" href="#events-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages" >Events</li></a></li>
                <li class="burger-option" id="burger"><a onclick="" href="#logout-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-events"  >Logout</li></a></li> 
            </ul>
        </div>

<section id="update-password-section">
    <div class="admin-option create-user-form" id="update-password-section" >

        <div class="lead admin-option-title" id="show-myaccount-title" 
        onclick="toggleVisibleActive(document.getElementById('update-password'),this);">
        <h1>My ACCOUNT</h1></div>

        <form class="update-password add-user-form lead" id="update-password" action="./updatePassword.php" method="post">
            
            <label class="lead lbl" style="font-size: 2rem; text-align: center; margin:5rem 0rem;" >Update Password</label>    
            <label for="updatePasswordName" class="lbl lead">User ID <?php echo $_SESSION["userId"];?></label>      
            <!-- <input name="updatePasswordName" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="username"> -->

            <label for="updatePasswordOne" class="lbl lead">Enter New Password</label>      
            <br>
            <input name="updatePasswordOne" type="password" class="inp inp-lead lead" placeholder="password">
            <label for="updatePasswordTwo" class="lbl lead">Renter New Password</label>      
            <input name="updatePasswordTwo" type="password" class="inp inp-lead lead" placeholder="password">

            <input name="submit" value="Update" type="submit" class="login-btn lead inp">        
            <input name="reset"  value="Cancel" type="reset"  class="login-btn lead inp">        

        </form>    
    </div> 
</section>

<section id="student-management-section">
    <div class="admin-option show-student-info" >

        <div class="lead admin-option-title" id="show-student-info" 
        onclick="toggleVisibleActive(document.getElementById('student-user-table'),this);">
        <h1>MY CLASS</h1></div>

        <table border="1" class="courses-list-table table lead" id="student-user-table">   
        <thead>
            <tr>
                        <td>Student ID</td>
                        <td>Student name</td>
                        <td>Tests</td>
                        <td>Mid</td>
                        <td>Final</td>
                        <td>Assignment</td>
                        <td>Total</td>
                        <td>Grade</td>
            </tr>    
        </thead>
            <tbody>        
                <tr>
                <?php 
                //Accessing teacher's class by userId we took when teacher logged in.

                if ($_SESSION["userId"]) {
                $queryTeacherClass = "SELECT * FROM users WHERE userId = '".$_SESSION["userId"]."';";
                $teacherClassNameResult = mysqli_query($db,$queryTeacherClass);
                $teacherClassName = mysqli_fetch_assoc($teacherClassNameResult);
                $queryClassInfo = "SELECT * FROM ".$teacherClassName["className"];
                $resultClassInfo = mysqli_query($db,$queryClassInfo);
                
                while ($studentListInfo = mysqli_fetch_assoc($resultClassInfo)) {
                
                // Total and grade

                $total = $studentListInfo["stdAssign"]+$studentListInfo["stdFinal"]+$studentListInfo["stdMid"]+$studentListInfo["stdTest"];
                
                $grade;
                if ($total >= 90) {
                    $grade = "A";
                    }else if ($total >= 85) {
                        $grade = "B+";
                    }else if ($total >= 70) {
                        $grade = "B";
                    }else if ($total >= 60) {
                        $grade = "c+";
                    }else if ($total >= 50) {
                        $grade = "D";
                    }else if ($total <= 50) {
                        $grade = "F";
                    }else{
                        $grade = "Invalid";
                    }

                echo("<tr>");
                echo("<td>".$studentListInfo["stdId"]."</td>");
                echo("<td>".$studentListInfo["stdFname"]." ".$studentListInfo["stdLname"]."</td>");
                echo("<td>".$studentListInfo["stdTest"]."</td>");
                echo("<td>".$studentListInfo["stdMid"]."</td>");
                echo("<td>".$studentListInfo["stdFinal"]."</td>");
                echo("<td>".$studentListInfo["stdAssign"]."</td>");
                echo("<td>".$total."</td>");
                echo("<td>".$grade."</td>");
                echo("</tr>");
                    }
                }
                else{
                    echo('<td colspan="8">NO Data Found</td>');
                }
                ?>  
                </tr>


                <tr rowspan="2">
                    <td colspan="8" style="padding: 2rem 0rem; text-align:center;"><label class="lbl lead">UPDATE SESSION</label></td>
                </tr>
                <tr id="std-form-row">
                <form method="post" action="./updateRank.php">
                <td colspan="1">Update Rank</td>
                <td><input type="text" colspan="2" name="stdId" class="inp-lead" placeholder="ID" required></td>
                <td><input type="number" name="stdTest" class="inp-lead" placeholder="Test"></td>
                <td><input type="number" name="stdMid" class="inp-lead" placeholder="Mid"></td>
                <td><input type="number" name="stdFinal" class="inp-lead" placeholder="Final"></td>
                <td><input type="number" name="stdAssign" class="inp-lead" placeholder="Assignment"></td>
                <td colspan="2"><input name="submit" class="lead inp-lead" style="background: #e33;" type="submit" value="Update Rank"></td>
                </form>
                </tr>

        </tbody>
        </table>
    </div>
    <div class="admin-option add-students" >

        <div class="lead admin-option-title" id="update-students-rank-title"
        onclick="toggleVisibleActive(document.getElementById('form-manage-students'),this);">
        <h1>ADD STUDENTS TO MY CLASS</h1></div>
        <form class="courses-list-table" id="form-manage-students" method="post" action="./addStudents.php">
                    <label for="MclassId" class="lbl lead">Student Id</label>
                    <input type="text" name="MclassId"  id="stdId" class="inp inp-lead">

                    <label for="MclassFname" class="lbl lead">Student First Name</label>
                    <input type="text" name="MclassFname"  id="stdTest" class="inp inp-lead">

                    <label for="MclassLname" class="lbl lead">Student Last Name</label>
                    <input type="text" name="MclassLname"  id="stdMid" class="inp inp-lead">

                    <input type="submit" class="inp inp-lead login-btn">
                    <input type="reset"  class="inp inp-lead login-btn">
        </form>
    </div>
</section>

<section id="contact-section">
    <div class="admin-option contact-admin" >

        <div class="contacts-title lead admin-option-title" id="contacts-title" 
        onclick="toggleVisibleActive(document.getElementById('contact-option'),this);">
        <h1>CONTACT ADMIN</h1></div>

        <div class="contact-option" id="contact-option">

        <form action="./contact.php" method="post" class="form-event lead">
                <label for="inputNameContact" class="lbl lead">Your Name</label>
                <input autocomplete="off" name="inputNameContact" placeholder="Write full name (optional)" type="text" class="inp lead inp-lead">
                <label for="inputMessageContact" class="lbl lead">Your Message</label>
                <input autocomplete="off" name="inputMessageContact" placeholder="Write your message here" type="text" class="inp lead inp-lead" required>
                <input name="inputMessageSubmit" value="Send" type="submit" class="inp lead login-btn">
                <input name="inputMessageReset" value="Clear" type="reset" class="inp lead login-btn">
        </form>

        </div>
    </div>
</section>

<section id="events-section">
    <div class="admin-option">

        <div class="events-title lead admin-option-title" id="events-title" 
        onclick="toggleVisibleActive(document.getElementById('event-add-view'),this);">
        <h1>EVENTS</h1></div>
        
        <div class="event-add-view" id="event-add-view">
            <div class="event-list">
                <div class="event-message">
                    <div class="event-content lead"><h4>Event </h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, consectetur.
                    </div>
                    <div class="event-date lead"><h4>Date </h4><script>document.write(new Date().toDateString())</script></div>
                </div>

                <?php while ($eventRow = mysqli_fetch_assoc($resultEvents)) {     ?>
                <div class="event-message">
                    <div class="event-content lead"><h4>Event </h4> <?php echo($eventRow["eventMessage"])?>
                    </div>
                    <div class="event-date lead"><h4>Date </h4><?php echo($eventRow["eventDate"])?></div>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
</section>
<section id="logout-section">
    <a style="text-decoration: none;" href="./logout.php"><button style="display: block; width:60vw; margin :auto; padding: 6rem 0rem;" class="inp-lead inp login-btn">LOGOUT</button></a>
</section>
</div>
    <script src="../JS/home.js"></script>
    <!-- <script src="../JS/jquery.js"></script> -->
</body>
</html>