<?php
    include_once("../services.d/functions.php");
    pimport("services.d/connector");

    $email = isset($_POST['email'])?$_POST['email']:'';

    // echo md5(base64_encode($password));

    $conn = initiate();

    $query = "SELECT email FROM users WHERE email = '".$email."'";
    $run_query = mysqli_query($conn, $query);

    echo mysqli_num_rows($run_query);
    // echo $email;
?>