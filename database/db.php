<?php
    // This is for the first database creation

    //First we need to make sure its connected with server
    include_once "connect.php";

    //Lets create a database ShipinArt

    $database_query = "CREATE DATABASE IF NOT EXISTS shipinArt";
    $query_status = mysqli_query($connection, $database_query);
    if(!$query_status)
    {
        die("Query failed: ".mysqli_error($connection));
    }
?>