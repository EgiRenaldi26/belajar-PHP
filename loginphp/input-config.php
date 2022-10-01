<?php
    session_start();

    $mysqli = new mysqli("localhost", "root", "", "rpl_1");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>