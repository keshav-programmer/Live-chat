<?php
    include_once("../services.d/functions.php");
    pimport("services.d/connector");

    $email = isset($_POST['email'])?$_POST['email']:'INVALID_CHAR';
    $password = isset($_POST['password'])?$_POST['password']:'INVALID_CHAR';

    echo $email;

    $conn = initiate();

    $query = "SELECT * FROM users WHERE (email LIKE '".$email."')";
    $run_query = mysqli_query($conn, $query);
    // $key = $fetch['password'//];
    // $fetch = mysqli_fetch_assoc($run_query);
    // if(base64_encode(md5($password))==$fetch['password'])
    //     echo "true";
    // else
    //     header("location: ./?status=LOGIN_FAILED")
?>