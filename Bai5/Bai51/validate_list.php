<?php
  session_start();
  $validate = $_SESSION['validate'];
  echo "<pre>";
    print_r($_SESSION);
  echo "</pre>";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Danh sách sản phẩm trong kho</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Quê Quán</th>
                <th>Ngoại Ngữ</th>
                <th>Thông tin thêm</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>Họ Tên</td>
                <td>Giới Tính</td>
                <td>Ngày Sinh</td>
                <td>Quê Quán</td>
                <td>Ngoại Ngữ</td>
                <td>Thông tin thêm</td>
                </tr>
            </tbody>
        </table>
    </div>    `
    <a href="clearall.php">Xoá thông tin</a>
</body>
</html>