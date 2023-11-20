<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hà Tấn Tường - 2121050164</title>
</head>
<body>
<h1>Currency Exchange</h1>
  <form method="post" action="">
    <label for="amount">Amount:</label><br>
    <input type="number" id="amount" name="amount"><br>
    <label for="currency">Select currency:</label><br>
    <select id="currency" name="currency">
        <option value="USD">USD - Đô la Mỹ</option>
        <option value="AUD">AUD - Đô la Úc</option>
        <option value="JPY">JPY - Yên Nhật</option>
        <option value="EUR">EUR - Euro</option>
    </select><br>
    <input type="submit" name="convert" value="Chuyển đổi">
  </form>

  <div id="result">
    <?php
    if (isset($_POST['convert'])) {
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];

        $exchangeRates = [
            'USD' => 23000,
            'AUD' => 17000,
            'JPY' => 200,
            'EUR' => 27000
        ];

        if (array_key_exists($currency, $exchangeRates)) {
            $exchangeRate = $exchangeRates[$currency];
            $convertedAmount = $amount * $exchangeRate;
            echo "Số tiền chuyển đổi: " . number_format($convertedAmount, 2) . " VND";
        } else {
            echo "Vui lòng chọn loại ngoại tệ hợp lệ!";
        }
    }
    ?>
  </div>
</body>
</html>

