<?php

    //This is the first file to connect with the ShipinArt server

    $connect = mysqli_connect("localhost", "root", "");

    if(!$connect)
    {
        die("Sorry connection failed. ".mysqli_connect_error());
    }
?>