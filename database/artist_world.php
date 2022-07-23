<?php
    //we'll include the server connection

    include_once "connect.php";
    $db = mysqli_select_db($connection, "shipinArt");
    // For artists details 
    $query = "CREATE TABLE IF NOT EXISTS artist
            (artist_id INT(6) AUTO_INCREMENT PRIMARY KEY,
            artist_name VARCHAR(50) NOT NULL,
            artist_email VARCHAR(50) NOT NULL,
            artist_phone INT(13) NOT NULL, 
            artist_address VARCHAR(70) NOT NULL,
            artist_password VARCHAR(50) NOT NULL,
            artist_front_citizenship VARCHAR(500) NOT NULL,
            artist_back_citizenship VARCHAR(500) NOT NULL
            )";

    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query falied. ".mysqli_error($connection));
    }
?>

    
    
