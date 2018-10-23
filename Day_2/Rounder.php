<?php
class Rounder 
{
    function calculate($num) {
        if($num < 1) {
            return -1;
        } else if($num%2 == 0){
            return $num * $num;
        }else {
            return $num * $num * $num;
        }
    }
}
$obj = new Rounder();
echo $obj->calculate(3);
?>