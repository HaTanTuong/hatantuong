<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

        label {
            display: block;
            margin-bottom: 5px;
        }

        select,
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
    <h1>Tìm kiếm chuyến bay</h1>
    <form action="display_flight.php" method="post" name="register">
        <label for="origin">Origin</label>
        <select name="origin" id="origin">
            <!-- Thêm code PHP để lấy dữ liệu điểm đi từ CSDL và tạo các option cho dropdown list -->
            <?php
            require 'connect.php';
            $sql = "SELECT DISTINCT origin FROM flights"; // Lấy danh sách các điểm đi duy nhất từ CSDL
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["origin"] . "'>" . $row["origin"] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select> <br />

        <label for="destination">Destination</label>
        <select name="destination" id="destination">
            <!-- Thêm code PHP để lấy dữ liệu điểm đến từ CSDL và tạo các option cho dropdown list -->
            <?php
            require 'connect.php';
            $sql = "SELECT DISTINCT destination FROM flights"; // Lấy danh sách các điểm đến duy nhất từ CSDL
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["destination"] . "'>" . $row["destination"] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select> <br />
        <input type="submit" value="Tìm Kiếm" /> <br />
    </form>
</body>

</html>