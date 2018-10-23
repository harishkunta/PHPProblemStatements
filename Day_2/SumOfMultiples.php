<?php
class SumOfMultiples
{
    function sum($num1,$num2,$num3) {
        $no1=0;
        $no2=0;
        $no3=0;
        if($num1 < 1 || $num2 < 1 || $num3 <1) {
            return -1;
        } else {
            if(($num1 % 10) != 0) {
                $no1 =(ceil(($num1 + 9) / 10) -1) * 10;
            }
            if(($num2 % 10) != 0) {
                $no2 =(ceil(($num2 + 9) / 10) -1) * 10;
            }
            if(($num3 % 10) != 0) {
                $no3 =(ceil(($num3 + 9) / 10) -1) * 10;
            }
            return $no1+$no2+$no3;
        }
        
    }
}
$obj = new SumOfMultiples();
echo $obj->sum(22,34,69);
?>