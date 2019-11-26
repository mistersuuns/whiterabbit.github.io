<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['phoneNumber']) && isset($_POST['yourEmail']) && isset($_POST['timeDate']) && isset($_POST['duration']) && isset($_POST['publicPrivate']) && isset($_POST['guests']) && isset($_POST['considerations']) && isset($_POST['catering']) && isset($_POST['details']))
     {
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $yourEmail = $_POST['yourEmail'];
        $timeDate = $_POST['timeDate'];
        $duration = $_POST['duration'];
        $publicPrivate = $_POST['publicPrivate'];
        $guests = $_POST['guests'];
        $considerations = $_POST['considerations'];
        $catering = $_POST['catering'];
        $details = $_POST['details'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
/*
Username: email@whiterabbitcoffeeco.com
Password: Use the email account’s password.
Incoming Server: mail.whiterabbitcoffeeco.com
IMAP Port: 993 POP3 Port: 995
Outgoing Server: mail.whiterabbitcoffeeco.com
SMTP Port: 465
IMAP, POP3, and SMTP require authentication.
*/


        $mail->isSMTP();
        $mail->Host = "mail.whiterabbitcoffeeco.com";
        $mail->SMTPAuth = "true";
        $mail->Username = "email@whiterabbitcoffeeco.com";
        $mail->Password = "F1lml@bs";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($yourEmail, $name);
        $mail->addAddress("mybobbyjobby@gmail.com");
        $mail->phoneNumber($phoneNumber);
        $mail->timeDate($timeDate);
        $mail->duration($duration);
        $mail->publicPrivate($publicPrivate);
        $mail->guests($guests);
        $mail->considerations($considerations);
        $mail->catering($catering);
        $mail->details($details);

        if($mail->send())
            $response = "Success! We'll be in touch.";
        else
            $response = "Oops! " . $mail->ErrorInfo;
        exit(json_encode(array("response" => $response)));
    }
?>