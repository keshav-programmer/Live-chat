<?php
    session_start();
    include_once("../services.d/functions.php");
    pimport("services.d/connector");

    $email = isset($_POST['email'])?$_POST['email']:'INVALID_CHAR';
    $password = isset($_POST['password'])?$_POST['password']:'INVALID_CHAR';

    // echo md5(base64_encode($password));

    $conn = initiate();

    $query = "SELECT * FROM users WHERE (email LIKE '".$email."')";
    $run_query = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($run_query);
    
    if(md5(base64_encode($password))==$fetch['password']){
        $_SESSION['user'] = $email;
        header("location: ../");
    }
    else
        header("location: ./?login_attempt=LOGIN_FAILED")
?>