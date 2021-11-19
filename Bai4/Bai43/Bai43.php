<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <h3>Chuẩn hoá chuỗi</h3>
    <form action="" method="post">
        <p>Nhập chuỗi: <input type="text" name="soN" value=""/><br></p>
        <input type="submit" value="Kết quả" name="sub"/><br>
    </form>
    <?php
        function Upper($str)
        {
            return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
        }
        if(isset($_POST['sub']))
        {       
            $str=isset($_POST['soN']) ? $_POST['soN'] : '';
            echo "Chuẩn hoá chuỗi: ".trim(Upper($str));
        }
    ?>
</body>
</html>