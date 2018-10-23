<?php
class RoundedSum
{
    function sumOfRoundedValues($num1, $num2, $num3) {
            if($num1 < 1 || $num2 < 1 || $num3 <1) {
                return -1;
            } else {
                if($num1%10 < 5){
                    $num1 = $num1-($num1%10);
                }else {
                    $x=$num1%10;
                    $num1 = $num1+(10-$x);
                }
                if($num2%10 < 5){
                    $num2 = $num2-($num2%10);
                }else {
                    $y=$num2%10;
                    $num2 = $num2+(10-$y);
                }
                if($num3%10 < 5){
                    $num3 = $num3-($num3%10);
                }else {
                    $z=$num3%10;
                    $num3 = $num3+(10-$z);
                }
                return $num1+$num2+$num3;
            }   
        }
}
$obj = new RoundedSum();
echo $obj->sumOfRoundedValues(22,34,66);
?>