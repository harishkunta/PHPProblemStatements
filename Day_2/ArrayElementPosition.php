<?php

class ArrayElementPosition
{
    function getElementPosition($arr, $val) {
        $a = $arr;
        
        if(count($arr) == 0) {
            return -2;
        }else{
            sort($a);
             if($a[0] <= 0) {
                return -4;
            } else if($val <= 0) {
                return -3;
            } else if(!(in_array($val,$arr))) {
                return -1;
            } else {
                return array_search($val, $arr) + 1;
            }
        }
    }
}


$arr = [10, 30, 40, -4, 5];
$arr1 = [10, 20, 0, 40, 30];
$arr2 = [];
$arr3 = [10, 20, 30, 40];
$arr4 = [10, 20, 30, 40, 50, 60, 70];
$obj = new ArrayElementPosition();
echo $obj -> getElementPosition($arr, 40) . "\n"; 
echo $obj -> getElementPosition($arr1, 30). "\n";
echo $obj -> getElementPosition($arr2, 10). "\n";
echo $obj -> getElementPosition($arr3, 0). "\n";
echo $obj -> getElementPosition($arr4, 50);
?>