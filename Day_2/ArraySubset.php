<?php
class ArraySubset
{
    function getSubElementsOfArray($arr,$s,$l){
        $arr1 = array();
        if (count($arr)==0){
            return -1;
        }else if($s < 0 || $s >= count($arr) || $l >= count($arr) || $l<0){
            return -2;
        } else if ($s>$l){
            return -3;
        }else {
            for($i=$s;$i<=$l;$i++){
                $arr1[$i-$s] = $arr[$i];
            }
        }
        return $arr1;
    }
}
$obj = new ArraySubset();
$arr = array(10,20,30,20,30);
$s = 0;
$l = 3;
$arr1 = $obj->getSubElementsOfArray($arr, $s, $l);
for ($i=0;$i<count($arr1);$i++)
{
    echo $arr1[$i]." , ";
}
?>