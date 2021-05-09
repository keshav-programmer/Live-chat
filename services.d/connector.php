<?php

    $config = @file_get_contents("../services.d/config.json") or die("<b>Unable to get configuration information!<b>");
    $config = json_decode($config, true);

    define('HOST', $config['host'].':'.$config['port']);
    define('USER' ,$config['user']);
    define('PASSWORD', $config['password']);
    define('DATABASE', $config['database']);

    function initiate(){
        if($conn = mysqli_connect(HOST, USER, PASSWORD)){
            //connecting to database
            if(!mysqli_select_db($conn, DATABASE)){
                echo "Error in connecting to database - ".mysqli_error($conn);
            }
        } else 
            echo "Error in connection - ".mysqli_error($conn);
        return $conn;
    }

    
        
?>