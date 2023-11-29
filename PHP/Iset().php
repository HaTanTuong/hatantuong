<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hà Tấn Tường - 2121050164</title>
</head>
<body>
    <h3>Currency exchange</h3>
    <form action="" method="get">
        <p>Amount</p>
        <input type="number" name="amount">
        <select name="currency" >
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="SGD">SINGAPORE DOLAR</option>
            <option value="JPY">JAPANESE YEN</option>
        </select>
        <input type="submit" value="Convert">
    </form>
    <?php
        $exchangeRate = array("USD"=>22300,"EUR"=>27300,"SGD"=> 17000,"JPY"=>120);
        if (isset($_GET["amount"]))
        {
            $amount = $_GET["amount"];
            $currency = $_GET["currency"];
            echo"$amount USD is equal". number_format($amount*$exchangeRate[$currency]) . "VNĐ";
        }
    ?>
</body>
</html>