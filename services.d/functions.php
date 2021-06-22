<?php

    define("ROOT", "C:/xampp/htdocs/Live-chat/");

    function import($dir){
        include(ROOT.$dir);
    }

    function pimport($php){
        include(ROOT.$php.".php");
    }

    function randAlpha($len) {
        $str = '';
        $a = "abcdefghijklmnopqrstuvwxyz";
        $b = str_split($a);
        for ($i=1; $i <= $len ; $i++) { 
            $str .= $b[rand(0,strlen($a)-1)];
        }
        return $str;
    }

    function randAlphaNum($len) {
        $str = '';
        $a = "abcdefghijklmnopqrstuvwxyz0123456789";
        $b = str_split($a);
        for ($i=1; $i <= $len ; $i++) { 
            $str .= $b[rand(0,strlen($a)-1)];
        }
        return $str;
    }
	
	function randNum($len) {
        $str = '';
        $a = "0123456789";
        $b = str_split($a);
        for ($i=1; $i <= $len ; $i++) { 
            $str .= $b[rand(0,strlen($a)-1)];
        }
        return $str;
    }
?>