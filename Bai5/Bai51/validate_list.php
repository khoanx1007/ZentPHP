<?php
  session_start();
  $validates = $_SESSION['validates'];
    
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
        <a href="clearall.php" class="h4">Xoá thông tin</a>
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
                <?php foreach($validates as $validate)
                { ?>
                <tr>
                    <td><?= $validate['name'] ?></td>
                    <td><?= $validate['sex'] ?></td>
                    <td><?= $validate['date'] ?></td>
                    <td><?= $validate['country'] ?></td>
                    <td><?= $validate['lang[]'] ?></td>
                    <td><?= $validate['info'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>    
    
</body>
</html>