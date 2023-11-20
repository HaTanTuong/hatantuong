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
        echo "HAS BEEN QUITED"; // if-1 code block
        }
        else 
        {
            echo "WILL BE CONTINUED IN 3 SECONDS"; // else code block 
        }
        // after if statement 
        echo "<br>AFTER IF STATEMENT";
    ?>
</body>
</html>