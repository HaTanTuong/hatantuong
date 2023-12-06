<?php
    //kết nối database
    require 'connect.php';
    //Create sql to insert data
    $sql = "INSERT INTO flights (origin, destination, duration) VALUES ('Hà Nội', 'Paris', '4000')";
    // run the sql query 
    if($conn->query($sql) == TRUE) {   
        echo "New flight created succesfully";
    
    }
    else { 
        echo "Error:" . $sql . "<br>". $conn->error;
    }

    // close the connection
    $conn->close();
?>