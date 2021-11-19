<?php
$arr = array(13,16,27,11,1,6);
$max = $arr[0];
for ($i = 0 ; $i < count($arr) ; $i++)
{
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
}
 
echo "Giá trị lớn nhất trong mảng là " . $max;
?>