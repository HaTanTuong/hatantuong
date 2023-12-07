<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký chuyến bay</title>
</head>
<!--HÀ TẤN TƯỜNG - 2121050164   -->
<body>
    <h1>Đăng ký chuyến bay</h1>
    <form action="" method="post">
        <label for="name">Họ và tên:</label>
        <input type="text" name="name" required><br>

        <label for="flight">Chuyến bay muốn đăng ký:</label>
        <input type="text" name="flight_id" required><br>

        <input type="submit" value="Đăng ký">
    </form>
    <?php
    // Kiểm tra xem có dữ liệu được gửi từ form hay không
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kết nối đến CSDL
        require 'connect.php'; // Chứa thông tin kết nối đến CSDL

        // Kiểm tra và nhận dữ liệu từ form
        if (isset($_POST['name']) && isset($_POST['flight_id'])) {
            $name = $_POST['name'];
            $flight_id = $_POST['flight_id'];

            // Thực hiện truy vấn để thêm dữ liệu vào bảng 'passengers'
            $sql = "INSERT INTO passengers (name, flight_id) VALUES ('$name', '$flight_id')";

            // Thực hiện truy vấn
            if ($conn->query($sql) === TRUE) {
                echo "Đăng ký chuyến bay thành công!";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Dữ liệu từ form không hợp lệ";
        }

        // Đóng kết nối
        $conn->close();
    }
    ?>

</body>

</html>