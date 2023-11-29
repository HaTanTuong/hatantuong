<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hà Tấn Tường - 2121050164</title>
</head>

<body>
    <form action="" method="get">
        <p>First Number: </p>
        <input type="number" name="firstNumber"><br>
        <p>Second Number: </p>
        <input type="number" name="secondNumber"><br>
        <p></p>
        <input type="submit" name="add" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="divide" value="/">
    </form>
    <?php
        if (isset($_GET["add"]))
        {
            $result= $_GET["firstNumber"] + $_GET["secondNumber"];
            echo $result;
        }
        elseif (isset($_GET['minus'])) 
        {
            $result= $_GET["firstNumber"] = $_GET["secondNumber"]; 
            echo $result;
            }
        elseif (isset($_GET['multiply'])) 
        {
            $result = $_GET["firstNumber"]* $_GET["secondNumber"];
            echo $result;
            }
        elseif (isset($_GET['divide'])) 
        {
            $result = $_GET["firstNumber"] / $_GET["secondNumber"];
            echo $result;
        }
    ?>
</body>

</html>