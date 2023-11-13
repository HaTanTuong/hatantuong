<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
</head>

<body>
    <h2>Đăng ký thành viên</h2>

    <!-- Form sử dụng phương thức GET -->
    <form action="" method="GET">
        <label for="username">Tên đăng nhập:</label><!--for="username" được sử dụng để chỉ định ID của phần tử mà nhãn sẽ liên kết với -->
        <input type="text" name="username" id="username" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Đăng ký">
    </form>

    <hr>

    <!-- Form sử dụng phương thức POST -->
    <form action="" method="POST">
        <label for="username_post">Tên đăng nhập:</label>
        <input type="text" name="username_post" id="username_post" required>

        <label for="password_post">Mật khẩu:</label>
        <input type="password" name="password_post" id="password_post" required>

        <input type="submit" value="Đăng ký">
    </form>
</body> 

</html>
<?php
    // Kiểm tra xem dữ liệu đã được gửi bằng phương thức GET hay POST
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Lấy thông tin từ trang đăng ký sử dụng phương thức GET
        $username = $_GET["username"];
        $password = $_GET["password"];

        // In thông tin lên trang kết quả
        echo "<h2>Thông tin đăng ký (GET)</h2>";
        echo "Tên đăng nhập: $username <br>";
        echo "Mật khẩu: $password";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin từ trang đăng ký sử dụng phương thức POST
        $username_post = $_POST["username_post"];
        $password_post = $_POST["password_post"];

        // In thông tin lên trang kết quả
        echo "<h2>Thông tin đăng ký (POST)</h2>";
        echo "Tên đăng nhập: $username_post <br>";
        echo "Mật khẩu: $password_post";
    } else {
        // Nếu không phải GET hoặc POST, in thông báo lỗi
        echo "Lỗi: Phương thức không hỗ trợ.";
    }
?>