<?php
class CheckPrime
{
    function checkPrimee($number) {
        if($number < 0) {
            return -1;
        }
        else if($number == 0 || $number == 1) {
            return -2;
        }
        else {
            for($x=2; $x<$number; $x++) {
                if($number % $x == 0) { 
                    return "false";
                }
            }
            return "true";
        }
    }
}
$obj = new CheckPrime();
echo $obj->checkPrimee(7);
?>