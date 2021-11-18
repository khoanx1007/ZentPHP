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
        <p>Nhập a: <input type="text" name="soA" value=""/><br></p>
        <p>Nhập b: <input type="text" name="soB" value=""/><br></p>
        <p>Nhập c: <input type="text" name="soC" value=""/><br></p>
        <input type="submit" value="Kết quả" name="sub"/><br>
    </form>
    <?php
        
        if(isset($_POST['sub']))
        {       
            $a=isset($_POST['soA']) ? $_POST['soA'] : '';
            $b=isset($_POST['soB']) ? $_POST['soB'] : '';
            $c=isset($_POST['soC']) ? $_POST['soC'] : '';
            $delta=($b*$b)-(4*$a*$c);
            if ($delta<0){
                $kq="Phương trình vô nghiệm";
            }          
            else if($delta == 0){
                $kq="Phương trình có 2 nghiệm kép, x1=x2=".((-$b + sqrt($delta))/2*$a);
            }
            else {
                $kq="Phương trình có 2 nghiệm phân biệt, x1=".((-$b + sqrt($delta)/2*$a));
                $kq .=", x2=".((-$b - sqrt($delta))/2*$a);
            }
            echo $kq;
        }
    ?>
</body>
</html>