<?php
class SmallestNumber3
{
    function getSmallestNumber($num1, $num2, $num3) {
        if($num1 < 0 || $num2 < 0 || $num3 < 0) {
            return -1;
        }
        else if($num1 == $num2 && $num2 == $num3){
            return 0;
        }
        else{
            if($num1 < $num2 && $num1 < $num3)
            {
                return $num1;
            }
            else if($num2 < $num3)
            {
                return $num2;
            }
            else
            {
                return $num3;
            }
        }
    }
    
}
$obj = new SmallestNumber3();
echo $obj->getSmallestNumber(13,12,11);
?>