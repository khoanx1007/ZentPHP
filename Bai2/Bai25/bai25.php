<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Nhập n: <input type="text" name="soN" value=""/><br></p>
        <input type="submit" value="Kết quả" name="sub"/><br>
    </form>
    <?php
        
        if(isset($_POST['sub']))
        {       
            $n=isset($_POST['soN']) ? $_POST['soN'] : '';
            $t=0;     
            while ($n != 0){
                $tach = $n % 10;
                $t += $tach;
                $n = floor($n/10);
            }    
            echo "<br>Tổng các chữ số của số cần tìm là: ".$t;            
        }
    ?>
</body>
</html>