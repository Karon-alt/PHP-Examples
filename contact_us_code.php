<?php
            if(isset($_POST["submit"])){
            // Checking For Blank Fields..
            if($_POST["contact_name"]==""||$_POST["contact_email"]==""||$_POST["message"]==""){
            echo "Fill All Fields..";
            }else{
            // Check if the "Sender's Email" input field is filled out
            $email=$_POST['contact_email'];
            // Sanitize E-mail Address
            $email =filter_var($email, FILTER_SANITIZE_EMAIL);
            // Validate E-mail Address
            $email= filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email){
            echo "Invalid Email Address";
            }
            else{
            $message = $_POST['message'];
            $headers = 'From:'. $email2 . "rn"; // Sender's Email
            $headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            // Send Mail By PHP Mail Function
            mail("karonfox@ymail.com", $message, $headers);
            echo "Your message has been sent successfuly ! Thank you for your feedback";
            }
        }
    }
?>