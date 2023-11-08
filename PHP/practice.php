<?php
    echo"<h2>Hà Tấn Tường -2121050164</h2>";
    $a = 1;
    $b = 6;
    $c = 4;
    
    $delta = $b * $b - 4 * $a * $c;
    echo "Phương trình: $a.x**2 + $b.x + $c"."<br>";
    echo"Delta =".$delta."<br>";
    
    if ($delta > 0) {
        echo "Phương trình có hai nghiệm phân biệt";
    } elseif ($delta == 0) {
        echo "Phương trình có một nghiệm kép";
    } else {
        echo "Phương trình không có nghiệm thực";
    }
?>
    