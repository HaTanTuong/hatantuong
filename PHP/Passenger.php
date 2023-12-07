<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký chuyến bay</title>
</head>
<!--HÀ TẤN TƯỜNG - 2121050164   -->
<body>
    <h1>Tìm kiếm hành khách trên một chuyến bay</h1>
    <form action="" method="get">
        <label for="flight_id">Nhập mã chuyến bay:</label>
        <input type="text" name="flight_id" required><br>
        <input type="submit" value="Tìm kiếm">
    </form>
    <?php
       
        require 'connect.php';
    
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['flight_id'])) {
            $flight_id = $_GET['flight_id'];
    
            // Thực hiện truy vấn
            $sql = "SELECT * FROM passengers WHERE flight_id IN (SELECT id FROM flights WHERE flight_code = '$flight_id')";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // Hiển thị danh sách hành khách cho chuyến bay cụ thể
                echo "<h2>Danh sách hành khách:</h2>";
                while ($row = $result->fetch_assoc()) {
                    echo "Hành khách: " . $row['name'] . "<br>";
                }
            } else {
                echo "<p>Không có hành khách nào đăng ký chuyến bay này.</p>";
            }
        }
    
        $conn->close();
    ?>
    

</body>

</html>