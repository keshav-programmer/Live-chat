<?php
    include_once("functions.php");

    $email = isset($_POST['email']) ? $_POST['email'] :  "";
    $fname = isset($_POST['fname']) ? $_POST['fname'] :  "";

    $otp = randNum(6);

    $prepare = "
        <h2>Hii ".$fname.",<h2>
        <p>Use the following one-time password (OTP) to verify your email address. You can use this email address to sign-up or recover your Live Chat account.</p>
        <h2>".$otp."<h2><br>
        <p>Regards,</p>
        <p>Live Chat Team</p>
    ";

    $subject = "OTP for your Live Chat Account";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <no-reply@abc.com>' . "\r\n";

    // mail($email, $subject, $prepare, $headers);
    

    echo $otp;
