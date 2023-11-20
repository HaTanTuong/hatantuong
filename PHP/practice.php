<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>Hà Tấn Tường</h3>
            <form action="" method="get">
                Math: <input type="number" name="math"><br/>
                Physics: <input type="number" name="physics"><br/>
                Chemistry: <input type="number" name="chemistry"><br/>
                <input type="submit" value="Xét">
            </form>
        <?php
            $math = $_GET["math"];
            $physics = $_GET["physics"];
            $chemistry = $_GET["chemistry"];
            $Sum =  ($math + $physics + $chemistry);
            echo"Tổng điểm của bạn: $Sum </br>";

            if ($Sum >= 22){
                echo 'Bạn có thể trúng tuyển ngành: CNTT, CNTT chất lượng cao, KHDL, Địa chất, Môi trường';
            }
            else if ($Sum>=18 && $Sum <22){
                echo 'Bạn có thể trúng tuyển ngành: CNTT, KHDL, Địa chất, Môi trường';

            }
            else if ($Sum>=17 && $Sum <18){
                echo 'Bạn có thể trúng tuyển ngành: Địa chất, Môi trường';

            }
            else if ($Sum>= 15&& $Sum < 17){
                echo 'Bạn có thể trúng tuyển ngành: Môi trường';
            }
            else{
                echo 'Bạn không trúng tuyển ngành nào';
            }



            
        ?>

