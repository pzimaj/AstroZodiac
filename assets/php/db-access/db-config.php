<?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    $user = 'pz3920';
    $password = 'nevadaheld';
    $db = 'pz3920';
    $host = 'localhost';

    function connectToDB(){
        global $user, $password, $db, $host;

        $mysqli = new mysqli($host, $user, $password, $db);

        if(!$mysqli) {
            exit("ERROR {$mysqli->connect_error}");
        }
      
        return $mysqli;
    }
?>