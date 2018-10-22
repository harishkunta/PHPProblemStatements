<?php
class ThreeDigitPalindrome 
{
    function checkThreeDigitPalindrome($num) {
        if(strlen($num)!=3)
            return "false";
            else {
                $reverse=strrev($num);
                if(strcmp($reverse, $num)==0) {
                    return "true";
                }
                else {
                    return "false";
                }
            }
    }
}
$obj = new ThreeDigitPalindrome();
echo $obj->checkThreeDigitPalindrome(121);
?>