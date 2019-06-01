<?php
     if(isset($_POST['submit'])) {
         $myemail = 'andrea@andreatai.com';
         $subject = $_POST['subject'];
         $name = $_POST['name'];
         $email = $_POST['email'];
         $message = $_POST['message'];
         $headers = 'From: Contact Form <$myemail>\r\n';
         $headers .= 'Reply-To: $name <$email>\r\n';
         echo 'Your message has been sent successfully!';
         echo '<a href="http://www.andreatai.com/contact">Return to Page</a>';
         mail($myemail, $subject, $message, $headers);
     } else {
         echo 'An error has occurred!';
     }
 ?>