<?php

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
        require '../vendor/autoload.php';

        $mail->isSMTP();
        $mail->Host = "smtp.googlemail.com";
        $mail->SMTPAuth = "true";
        $mail->Username = "whiterabbitproposal@gmail.com";
        $mail->Password = "udzuulwuolnkdsju";
        $mail->Port = 587;
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($yourEmail, $name);
        $mail->addAddress("mrbobbyjobby@gmail.com", "Amy Ferris");
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
    else {

    };
?>