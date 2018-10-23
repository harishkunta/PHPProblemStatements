<?php
class FindSquare
{
    function getSquare($number) {
        if($number == 0) {
            return -1;
        }
        else if($number < 0) {
            return -2;
        }
        else {
            return $number * $number;
        } 
    }
}
$obj = new FindSquare();
echo $obj->getSquare(5);
?>