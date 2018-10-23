<?php
class ReverseWords{
    function reverse($arr){
        $a = strrev($arr);
        $b = array(explode(" ", $a));
        $b = array_reverse($b);
        return $b;
    }
}
$obj= new ReverseWords();
$arr = "this is a training program";
$arr = $obj->reverse($arr);
$str = "";
for($i=0; $i<count($arr); $i++){
    $str .= implode(" ",$arr[$i]);
}
print $str;
?>