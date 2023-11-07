<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Log in to HUMG</title>
  </head>
  <body>
    <h2>Hà Tấn Tường - 2121050164</h2>
    <form action="" method="post" name='register'>
      <h1>Lựa chọn chuyên ngành</h1>
      <select name="industry">
        <option value="CNTTDH"> CNTT địa học</option>
        <option value="CNPM">Công nghệ phần mềm</option>
        <option value="KHMT">Khoa học máy tính</option>
        <option value="THKT">Tin học kinh tế</option>
        <option value="HTTT">Hệ thống thông tin</option>
      </select><br>

      <h2>Lựa chọn học phần</h2>
      <select name="subjects" size="4" multiple>  <!-- multiple có thể nhập nhiều giá trị-->
        <option value="web">Phát triển ứng dụng Web</option>
        <option value="python">Python</option>
        <option value="web-py">Phát triển ứng dụng Web với Python</option>
        <option value="cslt">Cơ sở lập trình</option>
        <option value="cslt">Cơ sở lập trình</option>
      </select><br>

      <h2>Ý kiến phản hồi</h2>
      <textarea name="message" rows="15" cols="35">
      </textarea><br>
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>