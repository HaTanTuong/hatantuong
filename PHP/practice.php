<?php
    function dislay_image_list($imagelist)
    {
        foreach ($imagelist as $item)
        {
            echo "<img src='images/$item' width=50px height = 50px alt='$item'>";
        }
    }
    $items = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
        dislay_image_list($items);
?>


<h1>function</h1>
<h2>Hà Tấn Tường - 2121050164</h2>
<?php
    $items = array('item5.png', 'item6.png');
    dislay_image_list($items);
?>