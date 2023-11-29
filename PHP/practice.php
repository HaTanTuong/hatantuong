<?php
// Hàm tính điểm trung bình của học sinh từ các môn học
function calculateAverage($math, $physics, $chemistry, $english, $literature, $history) {
    // Tạo một mảng chứa điểm từng môn học
    $grades = array($math, $physics, $chemistry, $english, $literature, $history);
    
    // Số lượng môn học
    $totalSubjects = count($grades);
    
    // Tính tổng điểm của các môn học
    $sum = array_sum($grades);
    
    // Tính điểm trung bình
    $average = $sum / $totalSubjects;
    
    // Trả về giá trị điểm trung bình
    return $average;
}

// Hàm xác định xếp loại học sinh dựa trên điểm trung bình
function classifyStudent($average) {
    if ($average < 5) {
        return "Học sinh yếu";
    } elseif ($average >= 5 && $average < 6.5) {
        return "Học sinh trung bình";
    } elseif ($average >= 6.5 && $average < 8) {
        return "Học sinh khá";
    } else {
        return "Học sinh giỏi";
    }
}

// Kiểm tra nếu request method là POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy điểm từ form POST
    $math = $_POST["math"];
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];
    $english = $_POST["english"];
    $literature = $_POST["literature"];
    $history = $_POST["history"];

    // Tính điểm trung bình
    $average = calculateAverage($math, $physics, $chemistry, $english, $literature, $history);

    // Hiển thị kết quả điểm trung bình
    echo "<h3>Điểm trung bình:</h3>";
    echo "<p>Điểm trung bình của bạn là: " . number_format($average, 2) . "</p>";

    // Xác định và hiển thị xếp loại học sinh
    echo "<h3>Xếp loại:</h3>";
    $classification = classifyStudent($average);
    echo $classification;
}
?>
