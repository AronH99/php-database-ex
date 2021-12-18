<?php

function getData($query, $dbname)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($query);
    $conn->close();
    return $result;
}

