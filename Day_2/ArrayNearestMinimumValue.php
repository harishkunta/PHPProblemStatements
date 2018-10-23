<?php
class ArrayNearestMinimumValue{
    function  getNearestMinValue($arr){
        for($i=0;$i<count($arr)-1;$i++){
            $min = min($arr[$i],$arr[$i+1]);
        }
        $min = $min-1;
        return $min;
    }
}
$obj= new ArrayNearestMinimumValue();
$arr = array(10,3,-2,20);
echo $obj->getNearestMinValue($arr);
?>