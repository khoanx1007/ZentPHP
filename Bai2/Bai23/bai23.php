<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
    echo "Số nguyên tố nhỏ hơn 100";
    for($i=2;$i<=100;$i++)
    {
        $dem=0;
        for($j=1;$j<=100;$j++)
        {
            if (($i % $j)==0)
                $dem+=1;
        }
        if ($dem==2)
            echo "<br> $i";
    }
?>
</body>
</html>