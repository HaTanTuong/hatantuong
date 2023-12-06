<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hà Tấn Tường - 2121050164</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
    require 'connect.php';


    // Truy vấn dữ liệu từ bảng 'flights'
    $sql = "SELECT * FROM flights";
    $result = $conn->query($sql);

    // Kiểm tra xem có hàng trả về không
    if ($result->num_rows > 0) {
        echo "<h2>Bảng Chuyến bay</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Điểm Xuất phát</th><th>Điểm Đến</th><th>Thời Gian</th></tr>";

        // Xuất dữ liệu từng hàng
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["origin"] . "</td>";
            echo "<td>" . $row["destination"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Không có chuyến bay nào</p>";
    }

    $conn->close();
?>

</body>
</html>