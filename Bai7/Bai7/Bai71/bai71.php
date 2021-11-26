<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>Upload file</title>
</head>
<body>
    <div class="container">
        <h3>Upload ảnh đại diện</h3>
        <form action="upload.php" method="POST" role="form" enctype="multipart/form-data">
            <h4>Chọn ảnh đại diện:</h4>
            <input type="file" name="avatar"> <br>
            <button type="submit" value="submit" class="btn btn-primary h1" name="btn_login">Upload ảnh</button>
        </form>        
        <br>
        <?php if(isset($_SESSION['upload_status']) && $_SESSION ['upload_status'][0] == false)
        { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    foreach ($_SESSION['upload_status'][1] as $error){
                        echo "<p> - " . $error . "</p>";
                    }
                    unset($_SESSION['upload_status']);
                ?>
        </div>
        <?php } ?>
        <?php if (isset($_SESSION['$upload_status']) &&  $_SESSION ['upload_status'][0] == true )
        { ?>
            <div class="alert alert-success" role="alert">
                Đường dẫn file sau khi upload : <?= $_SESSION['upload_status'][1]; ?>
            </div>
        <?php 
        unset($_SESSION['upload_status']);
        }
        ?>

    </div>
</body>
</html> 