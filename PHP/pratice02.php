<h1>Ngày Sinh</h1>
<?php
$selectedDay = isset($_POST['day']) ? $_POST['day'] : '';
$selectedMonth = isset($_POST['month']) ? $_POST['month'] : '';
$selectedYear = isset($_POST['year']) ? $_POST['year'] : '';

// Hàm tạo danh sách các tùy chọn cho dropdown
function generateOptions($start, $end, $selected)
{
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra và đánh dấu tùy chọn đã được chọn trước đó
        $isSelected = ($selected == $i) ? 'selected' : '';
        echo "<option value='$i' $isSelected>$i</option>";
    }
}
?>

<form method="post">
    Ngày:
    <select name="day">
        <?php generateOptions(1, 31, $selectedDay); ?>
    </select>

    Tháng:
    <select name="month">
        <?php generateOptions(1, 12, $selectedMonth); ?>
    </select>

    Năm:
    <select name="year">
        <?php
        // Lấy thông tin về ngày hiện tại để tạo danh sách các năm từ 1900 đến năm hiện tại
        $today = getdate();
        $curYear = $today["year"];
        generateOptions(1900, $curYear, $selectedYear);
        ?>
    </select>

    <input type="submit" value="Submit">
</form>
<?php
    // Kiểm tra nếu form đã được gửi và hiển thị thông tin ngày, tháng, năm đã chọn
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<h2>Hà Tấn Tường - 2121050164 sinh vào:</h2>";
        echo "Ngày: " . $selectedDay . "<br>";
        echo "Tháng: " . $selectedMonth . "<br>";


        echo "Năm: " . $selectedYear;
    }
?>