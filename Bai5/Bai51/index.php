<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="validate_process.php" method="POST" role="form">
            <legend class="text-center">Form nhập thông tin</legend>
            <div class="form-group">
                <label for="" class="h6">Họ và tên:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="" class="h6">Giới tính:</label><br>
                <input type="radio" name="sex" value="Nam"> Nam
                <input type="radio" name="sex" value="Nữ"> Nữ
                <input type="radio" name="sex" value="Không Xác Định"> Không xác định
            </div>
            <div class="form-group">
                <label for="" class="h6">Ngày, tháng, năm sinh:</label><br>
                <input type="text" class="form-control" name="date">
            </div>  
            <div class="form-group">
                <label for="" class="h6">Quê quán:</label><br>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="form-group">
                <label for="lang" class="h6">Ngoại ngữ: </label><br>
                <input type="checkbox" name="lang[]" value="eng"> Tiếng Anh
                <input type="checkbox" name="lang[]" value="fr"> Tiếng Pháp
                <input type="checkbox" name="lang[]" value="jpn"> Tiếng Nhật
            </div>
            <div class="form-group">
                <label for="" class="h6">Thông tin thêm: </label><br>
                <textarea type="text" class="form-control" rows="3" cols="80" name="info"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>
</body>
</html>