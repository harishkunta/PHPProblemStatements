<?php
class ArrayEvenElementsSum
{
    function getSumOfEvenNumbers($arr){
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
                $sum += $arr[$i] ;
            }else{
                
            }
        }
        return $sum;
    }
}
$obj = new ArrayEvenElementsSum();
$arr = array(10,11,20,21,30);
echo $obj->getSumOfEvenNumbers($arr);
?>
