<?php

class ArrayDiagonalSum
{
    function isSquare($arr) {
        $a[] = count($arr);
        for($i = 0; $i < count($arr)-1 ; $i++) {
            $a[] = count($arr[$i]);
        }
        $a = array_unique($a);
        
        return count($a);
    }
    function getDiagonalSum($arr) {
        $sum = 0;
        
            for($i = 0; $i < count($arr) ; $i++) {
                for($j = 0; $j < count($arr) ; $j++){
                    if( $i == $j ){
                        $sum += $arr[$i][$j];
                    }
                }
            }
            
            echo $sum;
        
        
    }
}
$arr = array
(
    array(10, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3),
    
);
$obj = new ArrayDiagonalSum();
if( $obj -> isSquare($arr) != 1){
    return null;
}else {
    $obj -> getDiagonalSum($arr);
}

?>