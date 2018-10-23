<?php

class SumOfArray1
{
    function sumOfArray($ar){
       
        for($i = 0; $i < count($ar)-1; $i++) {
            if($ar[$i] < 0){
                return -2;
            }
        }
        if(count($ar) == 0) {
            return -1;
        }else{
            return array_sum($ar);
        }
        
        
    }
}

$arr = [1, -2, 3, 2, 4, 1];
$obj = new SumOfArray1();
$ar = array_unique($arr);
$obj -> sumOfArray($ar);

?>