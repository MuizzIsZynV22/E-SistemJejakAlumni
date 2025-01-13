<?php

    // get env
    date_default_timezone_set("Asia/Kuala_Lumpur"); 

    $env = parse_ini_string(file_get_contents(__DIR__.'/.env'));
    $hostname = $env['HOSTNAME'];
    $username = $env['USERNAME'];
    $password = $env['PASSWORD'];
    $dbname = $env['DBNAME'];
    $secret_key = $env['SECRET_KEY'];

    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    // error reporting 
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    function errorHandler($errno, $errstr, $errfile, $errline){
        echo "ERROR : [$errno] $errstr - ( $errfile | line $errline)";

    }
    set_error_handler("errorHandler");
?>