<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hà Tấn Tường  - 2121050164</title>
</head>
<body>
    <?php
        // befor if statement 
        echo "THE GAME ";
        if ($_GET["response"] == "yes"){

         //if-1 statement, condition: $_GET["response")= "yes":"
        echo "HAS BEEN QUITED"; // 1-1 code Loch
        }
        if ($_GET["response"] == "no") //f-2 statement; condition: $_GET["response"]
        {
            echo "WILL BE CONTINUED IN 3 SECONDS"; // 37-2 code blach
            // after if statement 
        }
        echo "<br>AFTER IF STATEMENT";
    ?>
</body>
</html>