<?php
class GreatestNumber3 {
    function getGreatestNumber($num1,$num2,$num3) {
        if($num1==$num2 && $num2==$num3)
            return 0;
            else if($num1<0 || $num2<0 || $num3<0) {
                return -1;
            }
            else {
                if($num1>$num2){
                    if($num1>$num3)
                        return $num1;
                        else
                            return $num3;
                            
                }
                else {
                    if($num2>$num3)
                        return $num2;
                        else
                            return $num3;
                }
            }
    }
}
$obj = new GreatestNumber3();
echo $obj->getGreatestNumber(12,13,14);
?>