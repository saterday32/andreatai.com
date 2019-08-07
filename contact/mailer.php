 <?php

    $myAwardSpaceEmail = "andrea@andreatai.com";
    $myPersonalEmail = "at.andreatai@gmail.com";

    if(isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";

        echo 'Your message was sent successfully! Returning to previous page now...';
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo 'An error has occurred! Redirecting to contact form...';
    }

    header("Location: http://www.andreatai.com/contact");
    exit();
?>