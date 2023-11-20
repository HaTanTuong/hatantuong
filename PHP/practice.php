<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is It Christmas?</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
        h1 {
            text-align: center;
            font-size: 150px;
            padding-top: 140px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?php
        $day = date("jS");
        $month = date("F");
        if ($day == "25th" AND $month == "December")
        {
            echo "<h1>ĐÚNG</h1>";
        }
        else
        {
            echo "<h1>SAI</h1>";
        }
    ?>    
</body>
</html>
