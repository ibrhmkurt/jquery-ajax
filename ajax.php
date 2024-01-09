<?php

    require_once(__DIR__.'/config.php');
    if($_POST){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(!empty($fullname) && !empty($email) && !empty($message)) {
            $insert = $db->prepare("INSERT INTO messages SET fullname = ?, email = ?, message = ?");
            $x = $insert->execute(array($fullname, $email, $message));
            if(!empty($x)){
                echo "Message sent successfully";
            }else{
                echo "Message not sent";
                die();
            }
        }else{
            echo "Please fill all the fields";
        }
    }
?>