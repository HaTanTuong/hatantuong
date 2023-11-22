<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Hà Tấn Tường - 2121050164</title>
</head>
<body>
    <?php
        $exchangeRate = array("USD"=>22300, "EUR"=>27300, "SGD">17000, "JPY"=>120);
        $amount = $_GET['amount'];
        $currency = $_GET["currency"];
        echo " Samount USD is equal". number_format($amount* $exchangeRate[$currency])."VNĐ";
    ?>
</body>
</html>