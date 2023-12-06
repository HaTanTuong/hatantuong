<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hà Tấn Tường - 2121050164</title>
</head>
<body>
<?php
    require 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $origin = $_POST["origin"];
        $destination = $_POST["destination"];
        $duration = $_POST["duration"];

        // Sử dụng Prepared Statements để thêm dữ liệu vào bảng 'flights'
        $stmt = $conn->prepare("INSERT INTO flights (Origin, Destination, Duration) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $origin, $destination, $duration);

        if ($stmt->execute()) {
            echo "Thêm thành công";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Form submission error";
    }

    $conn->close();
?>
<?php
    require "display_flight.php";
?>
</body>
</html>l