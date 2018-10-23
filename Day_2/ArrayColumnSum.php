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
    
    function getColumnSum($arr) {
        
        for($i = 0; $i < count($arr) ; $i++) {
            $sum = 0;
            for($j = 0; $j < count($arr[$i]) ; $j++){
                $sum += $arr[$j][$i];
            }
            $ret[] = $sum;
        }
        
        echo $ret[0];
    }
}

$arr = array
(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3),
    
);

$obj = new ArrayRowSum();


if( $obj -> isSquare($arr) != 1 ){
    return null;
}else {
    $obj -> getColumnSum($arr);
}

?>
