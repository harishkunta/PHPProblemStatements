<?php
class SumOfFactors
{
    function getSumOfFactors($number) {
        if($number < 0) {
            return -1;
        }
        else if ($number == 0) {
            return -2;
        }
        else {
            $factors = 0;
            for($x = 1; $x <= $number; $x++) {
                if($number % $x == 0) {
                    $factors += $x;
                }
            }
            return $factors;
        }
    }
}
$obj = new SumOfFactors();
echo $obj->getSumOfFactors(28);
?>