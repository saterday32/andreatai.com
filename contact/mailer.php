<?php


    $myEmail = "Contact Form <andrea@andreatai.com>";
    $myPersonalEmail = "at.andreatai@gmail.com";

    if(isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: " . $name . " <" . $email . ">" . "\r\n";

        mail($myEmail, $subject, $message, $headers);
        echo 'Your message was sent successfully! Returning to previous page now...';
    } else {
        echo 'An error has occurred! Redirecting to contact form...
        <script>
          setTimeout(
               function() {
                    window.location.replace("https://andreatai.com/contact");
               }, 1500);
        </script>';
    }

    echo '<script type="text/JavaScript">
              setTimeout(
                   function() {
                        window.location.replace("https://andreatai.com");
                   }, 1500);
          </script>';
    die();
    exit();
?>
