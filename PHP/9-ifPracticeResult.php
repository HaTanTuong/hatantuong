<?php
    // befor if statement
    $USD = 22308;
    $EUR= 27308;
    $SGD= 17000;
    $JPY = 120;
    $amount = $_GET['amount'];
    echo "$amount USD is equal ";
    if ($_GET["currency"] == "USD"){ //iƒ-1 statement; condition: $_GET["response"] = "yea
    echo $amount * $USD; // if-1 code block
    }
    elseif ($_GET["currency"] == "EUR") {
    echo $amount * $EUR; // elseif-1 code block
    }
    elseif ($_GET["currency"] == "SGD") {
    echo $amount * $SGD; // elseif-2 code block
    }
    else {
    echo $amount * $JPY; 
    }
    // after if statement
    echo " VND";
 ?>