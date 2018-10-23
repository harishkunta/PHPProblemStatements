<?php

class ArrayElementSearch
{
    function isElementExist($arr, $val) {
        
        for($i = 0; $i < count($arr) ; $i++) {
            for($j = 0; $j < count($arr[$i]) ; $j++){
                if( $arr[$i][$j] == $val ){
                    
                    return "true";
                }
            }
        }
        return "false";
    }
}

$arr = array
(
    array(1, 2, 3),
    array(1, 8, 3, 5),
    array(1, 2, 4),
    
);

$obj = new ArrayElementSearch();
$obj -> isElementExist($arr, 8);
$obj -> isElementExist($arr, 6);

?>