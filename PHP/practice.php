<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $math = $_GET["math"];
        $physics = $_GET["physics"];
        $chemistry = $_GET["chemistry"];
        $english = $_GET["english"];
        $literature = $_GET["literature"];
        $history = $_GET["history"];
        $Mean =  ($math + $physics + $chemistry + $english + $literature + $history) / 6;
        echo "Điểm trung bình của bạn: $Mean </br>";

        if ($math < 0 || $math > 10) {
            echo 'Điểm môn Toán phải từ 0 -> 10';
        } else if ($physics < 0 || $physics > 10) {
            echo 'Điểm môn Lý phải từ 0 -> 10';
        } else if ($chemistry < 0 || $chemistry > 10) {
            echo 'Điểm môn Hóa phải từ 0 -> 10';
        } else if ($english < 0 || $english > 10) {
            echo 'Điểm môn Anh Văn phải từ 0 -> 10';
        } else if ($literature < 0 || $literature > 10) {
            echo 'Điểm môn Văn phải từ 0 -> 10';
        } else if ($history < 0 || $history > 10) {
            echo 'Điểm môn Lịch Sử phải từ 0 -> 10';
        } else if ($math <= 4 || $physics <= 4 || $chemistry <= 4 || $english <=  4 || $literature <= 4 || $history <= 4) {
            echo 'Học sinh giỏi yếu';
        } else {
            $Mean = ($math + $physics + $chemistry + $english + $literature + $history) / 6;

            if ($Mean < 5) {
                echo "Học sinh yếu";
            } else if ($Mean >= 5 && $Mean < 6.4) {
                echo "Học sinh trung bình";
            } else if ($Mean >= 6.4 && $Mean < 7.9) {
                echo "Học sinh khá";
            } else {
                echo "Học sinh giỏi";
            }
        }
    ?>
</body>

</html>