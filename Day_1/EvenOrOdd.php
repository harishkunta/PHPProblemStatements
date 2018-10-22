<?php
class EvenOrOdd
{
    function checkEvenOrOdd($number) {
        if($number < 0) {
            return -1;
        }
        else if(($number % 2) == 0) {
            return "Even Number";
        }else {
            return "Odd Number";
        }
    }
}
$obj = new EvenOrOdd();
echo $obj->checkEvenOrOdd(2);
?>