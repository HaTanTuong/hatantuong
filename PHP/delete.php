<?php
    require 'connect.php';
    mysqli_set_charset($conn,'UTF8');
    $sql ="DELETE FROM passengers WHERE id ='14";
    if($conn -> query($sql) === TRUE) {
        echo "Ticket with id = 14 has been deleted";
    }
    else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>