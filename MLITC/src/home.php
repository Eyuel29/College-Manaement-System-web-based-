<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" media = "screen and (max-width: 768px)" href="../style/moblie.css">
    <title> MLITC | Home</title>
</head>
<body>

    <?php
        session_start();
        require_once("./fetchData.php");
    ?>

    <div class="container dark-light" id="container">
        <div class="navbar-outer dark-light" id="navbar-outer">
            <div class="navbar-inner" id="navbar-inner">
                <div class="nav-logo" id="nav-logo">
                    <img src="../IMAGES/microlink-logo.jfif" alt="micro-logo" class="img-logo" id="micro-logo">
                    <p class="lead" id="nav-logo-title">Microlink IT College</p>
                </div>
                <div class="nav-options dark-light" id="nav-options">
                    <ul class="options-list lead" id="options-list">
                        <a onclick="" href="#container" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-home"    > Home</li></a>
                        <a onclick="" href="#create-users-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-users"> Users</li></a>
                        <a onclick="" href="#user-accounts-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-accounts" > Accounts</li></a>
                        <a onclick="" href="#courses-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages" > Courses</li></a>
                        <a onclick="" href="#contact-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-messages" > Messages</li></a>
                        <a onclick="" href="#events-section" style="text-decoration: none;" class="lead" ><li class="nav-opt" id="nav-option-events"   > Events</li></a>
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
                <li class="burger-option" id="burger">Home</li>
                <li class="burger-option" id="burger">Services</li>
                <li class="burger-option" id="burger">Student</li>
                <li class="burger-option" id="burger">Contact</li>
                <li class="burger-option" id="burger">About</li> 
            </ul>
        </div>
<section id="create-users-section">
<div class="admin-option create-user-form" id="create-user-form" >

    <div class="lead admin-option-title" id="show-students-title"
    onclick="toggleVisibleActive(document.getElementById('add-user-form'),this)">
    <h1>CREATE USERS</h1></div>

    
    <form class="add-user-form lead" id="add-user-form" action="./addUser.php" method="post">
        <label for="userId" class="lbl">User Id</label>     
        <input name="userId" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="Teacher ID or student ID" required>

        <label for="firstName" class="lbl">First name</label>     
        <input name="firstName" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="First name" required>
        <label for="lastName" class="lbl lead">Last name</label>      
        <input name="lastName" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="Last name" required>
        <label for="email" class="lbl lead">Email</label>         
        <input name="email" autocomplete="off" type="email" class="inp inp-lead lead" placeholder="Add email" required>
        <label for="accountType" class="lbl lead">Account type</label>   
        <!-- <input type="text" list="value" class="inp inp-lead lead"> -->
        <select class="inp inp-lead lead" type="text" name="accountType" id="inp-account-type" required>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select>

        <label for="className" class="lbl lead">Class Name</label>      
        <input name="className" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="Enter course name (teachers)">

        <label for="username" class="lbl lead">Username</label>      
        <input name="username" autocomplete="off" type="text" class="inp inp-lead lead" placeholder="username for the account" required>
        <label for="password" class="lbl lead">Password</label>      
        <input name="password" type="password" class="inp inp-lead lead" placeholder="password" required>

        <input name="submit" value="Add" type="submit" class="login-btn lead inp">        
        <input name="reset"  value="Reset" type="reset"  class="login-btn lead inp">        

    </form>    
</div>
</section>

<section id="user-accounts-section">
<div class="admin-option" >

    <div class="lead admin-option-title" id="show-students-title" 
    onclick="toggleVisibleActive(document.getElementById('student-user-table'),this)">
    <h1>STUDENT ACCOUNTS</h1></div>

    <table border="1" class="courses-list-table table lead" id="student-user-table">
        <thead>
            <tr>
            <td>Student ID</td>
            <td>Student name</td>
            <td>Student email</td>
            <td>
                Delete
            </td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while ($studentAccRows = mysqli_fetch_assoc($resultAccountStudents)) {
             ?>
                <td><?php echo($studentAccRows["username"]); ?></td>
                <td> <?php echo($studentAccRows["firstName"]); ?>&ThickSpace;<?php echo($studentAccRows["lastName"]); ?></td>
                <td> <?php echo($studentAccRows["email"]); ?> </td>
                <td><button>Delete</button></td>
            </tr>
            <?php } ?>

    </tbody>
    </table>
</div>

<div class="admin-option">
    <div
     class="lead admin-option-title" id="show-teachers-title" 
     onclick="toggleVisibleActive(document.getElementById('teachers-user-table'),this)">
     <h1>TEACHER ACCOUNTS</h1>
     </div>

    <table border="1" class="courses-list-table table lead" id="teachers-user-table">
        <thead>
            <tr>
            <td>Teacher ID</td>
            <td>Teacher name</td>
            <td>Teacher email</td>
            <td>
                Delete
            </td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php while ($teacherAccRows = mysqli_fetch_assoc($resultAccountTeachers)) {
             ?>
                <td><?php echo($teacherAccRows["username"]); ?></td>
                <td><?php echo($teacherAccRows["firstName"]); ?>&ThickSpace;<?php echo($teacherAccRows["lastName"]); ?></td>
                <td><?php echo($teacherAccRows["email"]); ?></td>
                <td><button>Delete</button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</section>

<section id="courses-section">
<div class="admin-option" >

    <div class="create-form-title lead admin-option-title" 
    onclick="toggleVisibleActive(document.getElementById('courses-list-table'),this)">
    <h1>COURSES BEING THOUGHT</h1></div>

    <table border="1" class="courses-list-table table lead" id="courses-list-table">
        <thead>
            <tr>
            <td>Course name</td>
            <td>Course Id</td>
            <td>Course Instructor</td>
            <td>Course attendants</td>
            <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>C++ basis</td>
                <td>MLITC_CB</td>
                <td>Tsegaye Amde</td>
                <td>40</td>
                <td>Giving</td>
            </tr>
        </tbody>
    </table>
</div>
</section>

<section id="contact-section">
<div class="admin-option admin-contact-list" >

    <div class="contacts-title lead admin-option-title" id="contacts-title" 
    onclick="toggleVisibleActive(document.getElementById('contact-option'),this)"
>
    <h1>MESSAGES</h1></div>

    <div class="contact-option" id="contact-option">
    <?php while ($messagesRow = mysqli_fetch_assoc($resultMessages)) {     ?>

        <div class="contact-message" id="contact-message">
            <div class="contact-pic"><img src="../ICONS/accounts.svg" alt="accounts" class="img-logo" id="img-account">
            </div>
            <div class="contact-body lead">
                <div class="contact-name lead"><?php echo($messagesRow["contactName"])?></div>
                <div class="contact-content lead"><?php echo($messagesRow["contactMessage"])?></div>
                <div class="contact-date lead"><?php echo($messagesRow["contactDate"])?></div>
            </div>
        </div>
        <?php }?>

    </div>
</div>
</section>

<section id="events-section">
<div class="admin-option">

    <div class="events-title lead admin-option-title" id="events-title" 
    onclick="toggleVisibleActive(document.getElementById('event-add-view'),this)">
    <h1>EVENTS</h1></div>
    
    <div class="event-add-view" id="event-add-view">
        <form action="./addEvent.php" method="post" class="form-event" id="form-event">
            <label for="event-name" class="lbl lead">Event description</label>
            <input autocomplete="off" name="inputEvent" placeholder="Type event" type="text" class="inp lead inp-lead">
            <label for="event-name" class="lbl lead">Event Time</label>
            <input name="inputDate" placeholder="" type="date" class="inp lead inp-lead">
            <input name="inputDateSubmit" value="Add" type="submit" class="inp lead login-btn">
            <input name="inputDateReset" value="Reset" type="reset" class="inp lead login-btn">
        </form>
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