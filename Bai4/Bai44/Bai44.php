<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <h3>Kiểm tra chuỗi palindrome</h3>
    <form action="" method="post">
        <p>Nhập chuỗi: <input type="text" name="soN" value=""/><br></p>
        <input type="submit" value="Kết quả" name="sub"/><br>
    </form>
    <?php
        
        function palindrome($str)   
		{  
		  if ($str == strrev($str))  
			  return 1;  
		  else  
			  return 0;  
		}  
        if(isset($_POST['sub']))
        {       
            $str=isset($_POST['soN']) ? $_POST['soN'] : '';
 
            if(palindrome($str)==1)
            {
                echo "Đây là chuỗi palindrome";
            }
            else
            {
                echo "Đây không phải là chuỗi palindrome";
            }
        }
    ?>
</body>
</html>