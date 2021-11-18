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
   
    $tong=0;
    for($i=1;$i<=100;$i++)
    {
        $tong=$tong+(1/$i);
    }
    echo "Tính tổng s = 1 + 1/2 + 1/3 +... + 1/100 = ".$tong;
?>
</body>
</html>