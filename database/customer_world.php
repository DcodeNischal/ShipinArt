<?php
    //we'll include the server connection

    include_once "connect.php";
    $db = mysqli_select_db($connection, "shipinArt");
    
    // For costumers details 
    $query = "CREATE TABLE IF NOT EXISTS customer
            (customer_id INT(6) AUTO_INCREMENT PRIMARY KEY,
            customer_name VARCHAR(50) NOT NULL,
            customer_email VARCHAR(50) NOT NULL,
            customer_phone INT(13) NOT NULL, 
            customer_address VARCHAR(70) NOT NULL,
            customer_password VARCHAR(50) NOT NULL
            )";

    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query falied. ".mysqli_error($connection));
    }
?>

    
    
