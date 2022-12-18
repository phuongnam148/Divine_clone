<?php

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "web_mysqli";

    $mysqli = new mysqli($dbHost, $dbUser,$dbPass,$dbName);

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Kết nối MySQL thất bại: " . $mysqli->connect_error;
    exit();
    }