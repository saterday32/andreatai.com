<?php
     if(isset($_POST['submit'])) {
         $myemail = 'andrea@andreatai.com';
         $subject = $_POST['subject'];
         $name = $_POST['name'];
         $email = $_POST['email'];
         $message = $_POST['message'];
         $headers = 'From: Contact Form <$myemail>\r\n';
         $headers .= 'Reply-To: $name <$email>\r\n';
         mail($myemail, $subject, $message, $headers);
         echo 'Your message has been sent successfully! Returning to previous page now...';
     } else {
         echo 'An error has occurred! Redirecting to contact form...';
     }

     header("Location: http://www.andreatai.com/contact"); /* Redirect browser */
     exit();
 ?>