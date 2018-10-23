<?php

class ArrayMinimumValue 
{
    function getMinValue($arr) {
        sort($arr);
       
        if(count($arr) == 0 ) {
            return 0;
        } else if($arr[0] <= 0 ) {
            return -1;
        } else{
            return $arr[0];
        }
            
    }
}
$arr = [10, 3, 54, 63, 2, 66, 73];
$obj = new ArrayMinimumValue();
 $obj ->getMinValue($arr);

?>