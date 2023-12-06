<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hà Tấn Tường - 2121050164</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        table {
            border: 2px solid blue;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid blue;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .odd{
            background-color: lightgreen;
        }

        .even{
            background-color: lightyellow;
        }
    </style>
</head>
<body>
<?php
    // Kiểm tra xem có hàng trả về không
    if ($result->num_rows > 0) {
        echo "<h2>Bảng Chuyến bay</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Origin</th><th>Destination</th><th>Duration</th></tr>";

        // Xuất dữ liệu từng hàng
        while ($row = $result->fetch_assoc()) {
            if ($row["id"]%2 == 0) {
                echo "<tr class = 'old'><td>".$row["id"]."</td>";
            }
            else {
                echo "<tr class ='even'><td>".$row["id"]."</td>"; 
            }
            
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