<?php
class SumOfDistinctElements {
    function getSumOfDistinctElements($arr) {
        $a=array_unique($arr);
        $sum=0;
        for($i=0;$i<count($a);$i++){
            if($a[$i] < 0){
                return -1;
            }
            else if ($a[$i] == 0){
                return -2;
            }else {
                
                $sum += $a[$i];
            }
        }
        return $sum;
    }
}
$obj = new SumOfDistinctElements();
$arr = array(20,10,20,10);
echo $obj->getSumOfDistinctElements($arr) ;
?>