<?php
class RangeWithStep
{
    function getNumbersInRange($low, $high, $step) {
        $values=null;
        if($low < 0 || $high < 0) {
            return -1;
        }
        else if($low ==  $high ) {
            return -2;
        }
        else if($low > $high) {
            return -3;
        }
        else {
            for($i = $low + 1; $i < $high; $i = $i + $step ) {
                
                $values .= $i." ";
            }
            return $values;
        }
    }
}
$obj = new RangeWithStep();
echo $obj->getNumbersInRange(10,20,2);
?>