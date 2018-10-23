<?php
class NumbersInRange
{
    function getNumbersInRange($low, $high) {
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
            for($i = $low + 1; $i < $high; $i++) {
                
                $values .= $i." ";
            }
            return $values;
        }
    }
}
$obj = new NumbersInRange();
echo $obj->getNumbersInRange(10,20);
?>