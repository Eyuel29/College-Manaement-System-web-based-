<?php
        include("./connection.php");    
        include("./fetchData.php");  

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
                echo("<script>window.history.back();</script>");
                die;
            }else{
                echo("<script>window.history.back();alert('Invalid information!');</script>");
            }
            }
?>