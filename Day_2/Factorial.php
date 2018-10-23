<?php
class Factorial
{
    function getFactorial($number) {
        if($number < 0) {
            return -1;
        }
        else if($number == 0) {
            return -2;
        }
        else {
            $factorial = 1;
            for ($x = $number; $x >= 1; $x--)
            {
                $factorial = $factorial * $x;
            } 
            return $factorial;
        }
    }
}
$obj = new Factorial();
echo $obj->getFactorial(5);
?>