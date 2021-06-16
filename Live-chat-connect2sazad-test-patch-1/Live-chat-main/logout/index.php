<?php

    session_start();

    include_once("../services.d/functions.php");
    pimport("services.d/connector");

    $conn = initiate();

    if(isset($_SESSION['user'])){
        date_default_timezone_set("Asia/Kolkata");
        $now =  date('d-m-Y H:i:s');
        $query = "UPDATE `users` SET `last_seen` = '".$now."' WHERE `users`.`email` = '".$_SESSION['user']."'";
        $run_query = mysqli_query($conn, $query);
        unset($_SESSION['user']);
    }
    session_destroy();
    header('location: ../');
    


//         $datetime1 = new DateTime();
// $datetime2 = new DateTime($last_seen);
// $interval = $datetime1->diff($datetime2);
// $elapsed = $interval->format('%i minutes');
// echo "last seen ".$elapsed." ago";
?>
