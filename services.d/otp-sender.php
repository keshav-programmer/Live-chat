<?php
    include_once("functions.php");

    $email = isset($_POST['email']) ? $_POST['email'] :  "";
    $fname = isset($_POST['fname']) ? $_POST['fname'] :  "";

    $otp = randNum(6);

    // $prepare = "
    //     <h2>Hii ".$fname.",<h2>
    //     <p>Use the following one-time password (OTP) to verify your email address. You can use this email address to sign-up or recover your Live Chat account.</p>
    //     <h2>".$otp."<h2><br>
    //     <p>Regards,</p>
    //     <p>Live Chat Team</p>
    // ";

    $prepare = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OTP </title>
        <style>
    
            @import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap");
    
             body{
                 font-family: "Poppins",sans-serif;
                 background-color: #cc9966;
             }
             #name{
                font-weight: 800;
                font-family: cursive;
             }
             p{
                 font-size: 20px;
             }
             #otp{
                 border: 2px solid black;
                 border-radius: 5px;
                 font-size: 1.5em;
                 padding-left: 10px;
                 padding-right: 10px;
		 padding: 15px;
             }
             #Contact{
                 position: relative;
                 top: -20px;
             }
             #logo{
                 width: 40px;
                 height: 40px;
                 margin-top: 10px;
                 /* position: relative; */
                 /* bottom: -55px; */
                 /* left: -100px; */
             }
    
        </style>
    </head>
    <body>
    
      <center>  <h1 id="header">Hii <span id="name">'.$fname.'</span>!</h1></center>
        <p>Use the following one-time password(OTP) to sign-in to your Live-chat Account.</p><br>
    
       <center> <span id="otp"><b>'.$otp.'</b></span></center><br>
       <p>(The OTP will be valid for the next 2 minutes)</p><p>If you didn\'t intiate this action or if you think you received this email by mistake, please contact</p><div id="Contact"><a href="https://mail.google.com/mail/u/0/?fs=1&to=live-chat-team@gmail.com&tf=cm">live-chat-team@gmail.com</a></div><br>
      <b> Regards</b>,<br>
      <a href="#"><img src="https://sazad.000webhostapp.com/imgcons/live-chat-logo.png" alt="Live Chat Team Logo" id="logo"></a><br>
       Live-Chat Team. 
        
    </body>
    </html>
    ';

    $subject = "OTP for your Live Chat Account";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <no-reply@abc.com>' . "\r\n";

    mail($email, $subject, $prepare, $headers);
    

    echo $otp;
