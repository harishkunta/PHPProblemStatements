<?php
    class SumOfDigits
    {
        function getSumOfDigits($num) {
            $rem = 0;
            if($num < 0) {
                return -1;
            } else if($num > 99) {
                return -2;
            } else if($num < 10 && $num > -1) {
                return -3;
            } else {
                $rem = $num%10;
                $num = $num/10;
                
                return $rem+floor($num);
            }
        }
    }
    $obj = new SumOfDigits();
    echo $obj->getSumOfDigits(45);
?>