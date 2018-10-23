<?php
class FindTriangle
{
    function findwhichTriangle($side1, $side2, $side3) {
        if($side1 == 0 || $side2 == 0 || $side3 == 0) {
            return -1;
        }
        else if($side1 < 0 || $side2 < 0 || $side3 < 0) {
            return -2;
        }
        else if($side1 + $side2 < $side3 || $side2 + $side3 < $side1 || $side1 + $side3 < $side2) {
            return -3;
        }
        else{
            if($side1 == $side2 && $side2 == $side3) {
                return "EQUILATERAL";
            }
            else if($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
                return " ISOSCELES";
            }
            else 
                return "SCALENE";
        }
    }
}
$obj = new FindTriangle();
echo $obj->findwhichTriangle(7,7,8);
?>