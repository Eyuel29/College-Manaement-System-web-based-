<?php 
        include("connection.php");
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
		$user_name = $_POST['adminName'];
		$password =  $_POST['password'];
        
        $result = mysqli_query($db,"SELECT * FROM admin");
        if($result)
        {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    echo ("<script>window.location.href = './home.php'</script>");
                    echo ("<script>console.log('hello')</script>");
                    die;
                }else
                {
                    echo ("<script>window.location.href = 'loginPage.php';alert('enter valid information!')</script>");                    
                }
            }
        }
    ?>