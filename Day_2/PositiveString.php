<?php
class PositiveString
{
    function isPositiveString($value) {
        $str = strtolower($value);
        if(!preg_match("/[a-z]/i", $str)){
            return "false";
        }
        for($x = 1; $x < strlen($str); $x++) {
            if(ord($str[$x-1]) > ord($str[$x])) {
                return "false";
            }
        }
        return "true";
    }
}
$obj = new PositiveString();
echo $obj -> isPositiveString("abcd");
?>