<?php

class ArrayRowSum
{
    
    function isSquare($arr) {
        $a[] = count($arr);
        for($i = 0; $i < count($arr)-1 ; $i++) {
            $a[] = count($arr[$i]);
        }
        $a = array_unique($a);
        
        return count($a);
    }
    
    function getRowsum($arr) {
        if(array_values($arr) == null){
            return null;
        }
        for($i = 0; $i < count($arr); $i++) {
            $ret[] = array_sum($arr[$i]);
        }
        return $ret;
}
}

$arr = array
(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3),
    
);

$obj = new ArrayRowSum();

if( $obj -> isSquare($arr) != 1){
    return null;
}else {
    $obj -> getRowSum($arr);
}

?>
