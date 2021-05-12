<?php

    define("ROOT", "C:/xampp/htdocs/Live chat/");

    function import($dir){
        include(ROOT.$dir);
    }

    function pimport($php){
        include(ROOT.$php.".php");
    }
?>