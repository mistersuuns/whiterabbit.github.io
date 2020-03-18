<?php
 if (isset($_POST['yourName']) && isset($_POST['emailAddress']) && isset($_POST['port']) && isset($_POST['timeDate']) && isset($_POST['duration']) && isset($_POST['publicPrivate']) && isset($_POST['guests']) && isset($_POST['considerations']) && isset($_POST['catering']) && isset($_POST['details']))
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

        $mail->isSMTP();
        $mail->Host = "smtp.googlemail.com";
        $mail->SMTPAuth = "true";
        $mail->Username = "whiterabbitproposal@gmail.com";
        $mail->Password = "udzuulwuolnkdsju";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($yourEmail, $name);
        $mail->addAddress("mybobbyjobby@gmail.com", "Amy Ferris");
        $mail->portfolioURL($portfolioURL);
        $mail->mediaType($mediaType);
        $mail->msg($msg);

        if($mail->send())
            $response = "Success! We'll be in touch.";
        else
            $response = "Oops! " . $mail->ErrorInfo;
        exit(json_encode(array("response" => $response)));
    } 
?>