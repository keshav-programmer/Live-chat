<?php
    session_start();
    include_once("../services.d/functions.php");
    pimport("services.d/connector");

    $fname = isset($_POST['fname'])?$_POST['fname']:'';
    $lname = isset($_POST['lname'])?$_POST['lname']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';

    $unique_id = $email.date("dmYHi");
    $unique_id = md5(base64_encode($unique_id));

    $password = md5(base64_encode($password));

    $conn = initiate();

    date_default_timezone_set("Asia/Kolkata");

    $query = "INSERT INTO `users` (`id`, `uniqueid`, `email`, `password`, `firstname`, `lastname`, `first_login`, `last_login`, `profile_pic`, `friends`) VALUES (NULL, '".$unique_id."', '".$email."', '".$password."', '".$fname."', '".$lname."', '".date("d-m-Y h:i:s a")."', '".date("d-m-Y h:i:s a")."', 'statics/default-profile.png', '');";
    $run_query = mysqli_query($conn, $query);

    
    if($run_query) {
        $_SESSION['user'] = $email;
        header("location: ./status.php?ACTIVATION_SUCCESS");
    } else
        header("location: ./status.php?ACTIVATION_FAILED");

?>