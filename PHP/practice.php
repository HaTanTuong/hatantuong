<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hà Tấn Tường - 2121050164</title>
    
</head>
<body>
<h1>Kiểm Tra Tuyển Dụng</h1>
    <form action="" method="get">
        <div>
            <label>Giới tính:</label>
            <select name ="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
            </select>
        </div>
        <div>
            <label>Chiều cao(m):</label>
            <input type="number" step="0.01" name="chieucao">
            <!--step: để chỉ định bước nhảy cho các giá trị được chọn hoặc nhập vào trường số.-->
        </div>
        <div>
            <label>Cân nặng(kg):</label>
            <input type="number" step="0.1" name="cannang">
        </div>
        <button type="submit">Check</button>
    </form>
  
    <?php
        $gioitinh = $_GET['gioitinh'];
        $chieucao = $_GET['chieucao'];
        $cannang = $_GET['cannang'];
      
        if ($gioitinh == 'nam') {
          if ($chieucao > 1.6 && $cannang > 50) {
            echo'Xin chúc mừng! Bản đáp ứng đủ điều kiện để gia nhập công ty.';
          } else {
            echo 'Xin lỗi! Bạn không đủ điều kiện gia nhập công ty.';
          }
        } else if ($gioitinh == 'nu') {
          if ($chieucao > 1.5 && $cannang > 40 && $cannang < 70) {
            echo 'Xin chúc mừng! Bản đáp ứng đủ điều kiện để gia nhập công ty.';
          } else {
            echo 'Xin lỗi! Bạn không đủ điều kiện gia nhập công ty.';
          }
        }
    ?>
</body>
</html>
