<?php
class ListFactors
{
    function getFactors($number) {
        if($number < 0) {
            return -1;
        }
        else if ($number == 0) {
            return -2;
        }
        else {
            $factors = "";
            for($x = 1; $x <= $number; $x++) {
                if($number % $x == 0) {
                   $factors.= $x." "; 
                }
            }
            return $factors;
        }
    }
}
$obj = new ListFactors();
echo $obj->getFactors(28);
?>