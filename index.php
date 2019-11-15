<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title></title>
</head>

<body>
    <p>
        <?php
        $to = 'info@whiterabbitcoffeeco.com';
        $subject = 'visitor to whiterabbitcoffeeco.com';
        $message = '';
        $from = '';

        // Sending email
        if (mail($to, $subject, $message)) {
            echo 'Your mail has been sent successfully.';
        } else {
            echo 'Unable to send email. Please try again.';
        }
        ?>
    </p>
</body>

</html>