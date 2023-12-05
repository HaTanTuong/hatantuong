<?php

    $servername ="localhost";
    $username = "root";
    $password = "";
    $db = "myDB";
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed:". $conn->connect_error);
    }
    echo"Conected Failed succesfully <br>";
    echo"<h1>Hà Tấn Tường - 2121050164</h1>";
?>