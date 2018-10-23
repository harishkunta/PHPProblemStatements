<?php
class ArrayModifiedElementsSum{
    function  getSumOfModifiedElements($arr){
        $sum=0;
        if (count($arr)==0){
            return -1;
        }
        for($i=0;$i<count($arr);$i++){
            if($arr[$i] < 0){
                return -2;
            }
            else if ($arr[$i] == 0){
                return -3;
            }else if($arr[$i]%2 == 0){
                $sum += $arr[$i] +$arr[$i];
            }else {
                $sum += floor($arr[$i]/2);
            }
        }
        return $sum;
    }
}
$obj = new ArrayModifiedElementsSum();
$arr = array(10,11,20);
echo $obj->getSumOfModifiedElements($arr);
?>
