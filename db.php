<?php


function db_con()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "lab_5b";

    $con = mysqli_connect($hostname, $username, $password, $database);

    if ($con && $con->connect_error) {
        echo "Connection fail";
    } else {
        return $con;
    }
}
