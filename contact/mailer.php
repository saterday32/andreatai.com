<?php

    $myAwardSpaceEmail = "Contact Form <andrea@andreatai.com>";
    $myPersonalEmail = "at.andreatai@gmail.com";

    if(isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: " . $name . " <" . $email . ">" . "\r\n";

        mail($myAwardSpaceEmail, $subject, $message, $headers);
        echo 'Your message was sent successfully! Returning to previous page now...';
    } else {
        echo 'An error has occurred! Redirecting to contact form...
        <script>
          setTimeout(1500);
          window.location.replace("https://andreatai.com/contact");
        </script>';
    }

    echo '<script type="text/JavaScript">
               setTimeout(1500);
               window.location.replace("https://andreatai.com/");
          </script>';
    die();
    exit();
?>