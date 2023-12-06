<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hà Tấn Tường - 2121050164</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            form {
                max-width: 400px;
                margin: 20px auto;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            input[type="text"],
            input[type="submit"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #8c5bdb;
            }
        </style>
    </head>
    <body>
        <h1>Add new Flight</h1>
        <form action="process_flight.php" method="get" name="register">
            <label for="">Origin</label> <input type="text" name="origin" placeholder=""/> <br/>
            <label for="">Destination</label> <input type="text" name="destination" placeholder=""/> <br/>
            <label for="">Duration</label> <input type="text" name="duration"/> <br/>
            <input type="submit" name="submit" value="Add"/> <br/>
        </form>
    </body>
        <?php
            require 'display_flight.php'; // Yêu cầu file display_flights.php để hiển thị bảng chuyến bay
        ?>
</html>
