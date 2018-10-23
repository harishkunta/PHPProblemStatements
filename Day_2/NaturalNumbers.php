<?php
class NaturalNumbers
{
    function getNaturalNumbers($low, $high) {
        $values=null;
        if($low < 0 || $high < 0) {
           return -1; 
        }
        else if($low == 0 || $high == 0) {
            return -2;
        }
        else {
            for($i = $low; $i <= $high; $i++) {
               
                $values .= $i." "; 
            }
            return $values;
        }
    }
}
$obj = new NaturalNumbers();
echo $obj->getNaturalNumbers(10,20);
?>